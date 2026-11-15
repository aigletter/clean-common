<?php

namespace Aigletter\CleanCommon\Domain\Collections;

use ArrayAccess;

/**
 * Mutable collection contract intended for explicit, temporary mutation.
 *
 * @template TKey of array-key
 * @template TValue
 * @extends CollectionOperations<TKey, TValue>
 * @extends ArrayAccess<TKey, TValue>
 */
interface MutableCollection extends CollectionOperations, ArrayAccess
{
    /**
     * Returns an independent immutable copy of this collection.
     *
     * @return Collection<TKey, TValue>
     */
    public function toImmutable(): Collection;

    /**
     * @param TKey $key
     * @param TValue $value
     */
    public function set(string|int $key, mixed $value): void;

    /**
     * @param TKey $key
     */
    public function remove(string|int $key): void;

    /**
     * @param TValue ...$value
     */
    public function push(mixed ...$value): void;

    /**
     * @return TValue|null
     */
    public function pop(): mixed;

    /**
     * @return TValue|null
     */
    public function shift(): mixed;

    /**
     * @param TValue ...$value
     */
    public function unshift(mixed ...$value): void;
}
