<?php

namespace Aigletter\CleanCommon\Domain\Contracts;

interface Arrayable
{
    /**
     * Returns this object as an array.
     *
     * @return array<array-key, mixed>
     */
    public function toArray(): array;
}