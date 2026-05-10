<?php

namespace Aigletter\CleanCommon\Domain\Events;

interface Event
{
    public static function code(): string;

    public function occurredAt(): \DateTimeInterface;
}