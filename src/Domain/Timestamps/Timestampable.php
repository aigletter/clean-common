<?php

namespace Aigletter\CleanCommon\Domain\Timestamps;

use DateTimeInterface;

/**
 * Used for specific domain entities where the creation and/or update dates carry business significance
 */
interface Timestampable
{
    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): DateTimeInterface;

    /**
     * @param DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): void;
}