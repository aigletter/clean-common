<?php

namespace Aigletter\CleanCommon\Domain\Timestamps;

/**
 * Used for specific domain entities where the creation and/or update dates carry business significance
 * @mixin Timestampable
 */
trait TimestampableTrait
{
    private \DateTimeImmutable $createdAt;

    private \DateTimeImmutable $updatedAt;

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}