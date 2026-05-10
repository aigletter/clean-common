<?php

namespace Aigletter\CleanCommon\Domain\Events;

/**
 * @mixin Emittable
 */
trait EmittableTrait
{
    private array $events = [];

    protected function enqueueEvent(Event $event): void
    {
        $this->events[] = $event;
    }

    public function releaseEvents(): array
    {
        $events = $this->events;
        $this->events = [];
        return $events;
    }
}