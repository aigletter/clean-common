<?php

namespace Aigletter\CleanCommon\Domain\Events;

trait OccurredAtTrait
{
    private \DateTimeImmutable $occurredAt;

    private function initOccurredAt(): void
    {
        $this->occurredAt = new \DateTimeImmutable();
    }

    public function occurredAt(): \DateTimeImmutable
    {
        return $this->occurredAt;
    }
}