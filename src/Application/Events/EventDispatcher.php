<?php

namespace Aigletter\CleanCommon\Application\Events;

use Aigletter\CleanCommon\Domain\Events\Emittable;
use Aigletter\CleanCommon\Domain\Events\Event;

interface EventDispatcher
{
    public function addListener(string $event, EventListener|callable $listener): void;

    public function removeListener(string $event, callable $listener): void;

    public function dispatchEmittable(Emittable $entity): void;

    public function dispatch(Event $event, ?Context $context = null): void;
}