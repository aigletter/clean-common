<?php

namespace Aigletter\CleanCommon\Domain\Collection;

use Aigletter\CleanCommon\Domain\Contracts\Arrayable;

interface Collection extends Arrayable, \ArrayAccess, \IteratorAggregate, \Countable
{
    public function map(callable $callback): static;

    public function get(string|int $key, mixed $default = null): mixed;

    /**
     * @param string|int $key
     * @param mixed $value
     * @return void
     * @deprecated since 1.0.1. Use immutable methods instead.
     * @see self::withKey()
     */
    public function set(string|int $key, mixed $value): void;

    public function has(string|int $key): bool;

    /**
     * @param string|int $key
     * @return void
     * @deprecated since 1.0.1. Use immutable methods instead.
     * @see self::withoutKey()
     */
    public function remove(string|int $key): void;

    /**
     * @param mixed ...$value
     * @return void
     * @deprecated since 1.0.1. Use immutable methods instead.
     * @see self::withAppended()
     */
    public function push(mixed ...$value): void;

    /**
     * @return mixed
     * @deprecated since 1.0.1. Use immutable methods instead.
     * @see self::withoutLast()
     */
    public function pop(): mixed;

    /**
     * @return mixed
     * @deprecated Will be removed in future versions. Use immutable methods instead.
     * @see self::withoutFirst()
     */
    public function shift(): mixed;

    /**
     * @param mixed ...$value
     * @return void
     * @deprecated Will be removed in future versions. Use immutable methods instead.
     * @see self::withPrepended()
     */
    public function unshift(mixed ...$value): void;

    public function each(callable $callback, mixed ...$args): static;

    public function keyBy(string|callable $key): static;

    public function pluck(string|callable $key): static;

    public function keys(): static;

    public function values(): static;

    public function slice(int $start, ?int $length = null): static;

    public function merge(Collection $collection): static;

    public function groupBy(string|callable $callback): static;

    public function first(?callable $callback = null, mixed $default = null): mixed;

    public function contains(mixed $value): bool;

    public function shuffle(): static;

    public function chunk(int $length): static;

    public function filter(?callable $callback = null): static;

    public function reduce(callable $callback, mixed $initial = null): mixed;

    public function collapse(): static;

    public function random(): mixed;

    public function unique(): static;

    public function withKey(string|int $key, mixed $value): static;

    public function withoutKey(string|int $key): static;

    public function withAppended(mixed ...$value): static;

    public function withoutLast(): static;

    public function withPrepended(mixed ...$value): static;

    public function withoutFirst(): static;
}