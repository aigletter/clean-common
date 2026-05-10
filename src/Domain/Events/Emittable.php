<?php

namespace Aigletter\CleanCommon\Domain\Events;

/**
 * @template T of Event
 */
interface Emittable
{
    /**
     * @return array<int, T>
     */
    public function releaseEvents(): array;
}