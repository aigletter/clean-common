<?php

namespace Aigletter\CleanCommon\Domain\Collections;

/**
 * Immutable collection contract used for domain state and public APIs.
 *
 * @template TKey of array-key
 * @template TValue
 * @extends CollectionOperations<TKey, TValue>
 */
interface Collection extends CollectionOperations
{
    /**
     * Returns an independent mutable copy of this collection.
     *
     * @return MutableCollection<TKey, TValue>
     */
    public function toMutable(): MutableCollection;

    /**
     * @param TKey $key
     * @param TValue $value
     * @return static
     */
    public function withKey(string|int $key, mixed $value): static;

    /**
     * @param TKey $key
     * @return static
     */
    public function withoutKey(string|int $key): static;

    /**
     * @param TValue ...$value
     * @return static
     */
    public function withAppended(mixed ...$value): static;

    /**
     * @return static
     */
    public function withoutLast(): static;

    /**
     * @param TValue ...$value
     * @return static
     */
    public function withPrepended(mixed ...$value): static;

    /**
     * @return static
     */
    public function withoutFirst(): static;
}
