<?php

namespace Aigletter\CleanCommon\Domain\Collections;

use Aigletter\CleanCommon\Domain\Contracts\Arrayable;
use Countable;
use IteratorAggregate;

/**
 * Read and non-mutating transformation operations shared by both collection types.
 *
 * @template TKey of array-key
 * @template TValue
 * @extends IteratorAggregate<TKey, TValue>
 */
interface CollectionOperations extends Arrayable, IteratorAggregate, Countable
{
    /**
     * @template TMapValue
     * @param callable(TValue, TKey): TMapValue $callback
     * @return self<TKey, TMapValue>
     */
    public function map(callable $callback): static;

    /**
     * @param TKey $key
     * @param TValue|null $default
     * @return TValue|null
     */
    public function get(string|int $key, mixed $default = null): mixed;

    /**
     * @param TKey $key
     * @return bool
     */
    public function has(string|int $key): bool;

    /**
     * @param callable(TValue, TKey): mixed $callback
     * @param mixed ...$args
     * @return static
     */
    public function each(callable $callback, mixed ...$args): static;

    /**
     * @template TNewKey of array-key
     * @param (callable(TValue, TKey): TNewKey)|string $key
     * @return self<TNewKey, TValue>
     */
    public function keyBy(string|callable $key): static;

    /**
     * @template TPluckValue
     * @param string|callable(TValue, TKey): TPluckValue $key
     * @return self<int, TPluckValue>
     */
    public function pluck(string|callable $key): static;

    /**
     * @return self<int, TKey>
     */
    public function keys(): static;

    /**
     * @return self<int, TValue>
     */
    public function values(): static;

    /**
     * @param int $start
     * @param int|null $length
     * @return static
     */
    public function slice(int $start, ?int $length = null): static;

    /**
     * @param Collection<TKey, TValue> $collection
     * @return static
     */
    public function merge(Collection $collection): static;

    /**
     * @template TGroupKey of array-key
     * @param (callable(TValue, TKey): TGroupKey)|string $key
     * @return self<TGroupKey, static>
     */
    public function groupBy(string|callable $key): static;

    /**
     * @param (callable(TValue, TKey): bool)|null $callback
     * @param TValue|null $default
     * @return TValue|null
     */
    public function first(?callable $callback = null, mixed $default = null): mixed;

    /**
     * @param TValue|callable(TValue, TKey): bool $value
     * @return bool
     */
    public function contains(mixed $value): bool;

    /**
     * @return static
     */
    public function shuffle(): static;

    /**
     * @param int $length
     * @return self<int, static>
     */
    public function chunk(int $length): static;

    /**
     * @param (callable(TValue, TKey): bool)|null $callback
     * @return static
     */
    public function filter(?callable $callback = null): static;

    /**
     * @template TReduceValue
     * @param callable(TReduceValue|null, TValue, TKey): TReduceValue $callback
     * @param TReduceValue|null $initial
     * @return TReduceValue|null
     */
    public function reduce(callable $callback, mixed $initial = null): mixed;

    /**
     * @return self<mixed, mixed>
     */
    public function collapse(): static;

    /**
     * @return TValue|null
     */
    public function random(): mixed;

    /**
     * @param (callable(TValue, TKey): mixed)|string|null $key
     * @param bool $strict
     * @return static
     */
    public function unique(string|callable|null $key = null, bool $strict = false): static;

    /**
     * @param (callable(TValue, TValue): int)|null $callback
     * @return static
     */
    public function sort(?callable $callback = null): static;

    /**
     * @param callable(TValue, TKey): mixed $callback
     * @param int $options
     * @param bool $descending
     * @return static
     */
    public function sortBy(callable $callback, int $options = SORT_REGULAR, bool $descending = false): static;

    /**
     * @param TValue|(callable(TValue,TKey): bool) $value
     * @param bool $strict
     * @return TKey|false
     */
    public function search(mixed $value, bool $strict = false): mixed;

    /**
     * @return static
     */
    public function empty(): static;
}
