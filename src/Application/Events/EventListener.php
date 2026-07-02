<?php

namespace Aigletter\CleanCommon\Application\Events;

use Aigletter\CleanCommon\Domain\Events\Event;

interface EventListener
{
    public function handle(Event $event, ?Context $context = null): void;
}