<?php

namespace Aigletter\CleanCommon\Domain\Contracts;

interface Timestampable
{
    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): \DateTimeInterface;

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): \DateTimeInterface;

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): void;
}