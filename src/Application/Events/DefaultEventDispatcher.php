<?php

namespace Aigletter\CleanCommon\Application\Events;

use Aigletter\CleanCommon\Domain\Events\Emittable;
use Aigletter\CleanCommon\Domain\Events\Event;

class DefaultEventDispatcher implements EventDispatcher
{
    private array $listeners = [];

    public function addListener(string $event, callable|EventListener $listener): void
    {
        $code = $this->getEventCode($event);
        $this->listeners[$code][] = $listener;
    }

    public function removeListener(string $event, callable|EventListener $listener): void
    {
        foreach ($this->getEventListeners($event) as $key => $item) {
            if ($item === $listener) {
                unset($this->listeners[$event][$key]);
            }
        }
    }

    public function dispatchEmittable(Emittable $entity, ?Context $context = null): void
    {
        foreach ($entity->releaseEvents() as $event) {
            $this->dispatch($event, $context);
        }
    }

    public function dispatch(Event $event, ?Context $context = null): void
    {
        foreach ($this->getEventListeners($event) as $listener) {
            $this->listen($listener, $event, $context);
        }
    }


    private function getEventCode(Event|string $event): string
    {
        if (is_string($event) && !is_a($event, Event::class, true)) {
            throw new \RuntimeException('Event type is not supported');
        }

        return $event::code();
    }

    private function getEventListeners(Event|string $event): array
    {
        $code = $this->getEventCode($event);
        return $this->listeners[$code] ?? [];
    }

    private function listen(EventListener|callable $listener, Event $event, ?Context $context = null): void
    {
        if (is_callable($listener)) {
            call_user_func($listener, $event, $context);
        } else {
            $listener->handle($event, $context);
        }
    }
}