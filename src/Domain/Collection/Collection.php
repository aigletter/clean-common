<?php

namespace Aigletter\CleanCommon\Domain\Collection;

use Aigletter\CleanCommon\Domain\Contracts\Arrayable;

interface Collection extends Arrayable, \ArrayAccess, \IteratorAggregate, \Countable
{
    public function map(callable $callback): static;

    public function get(string|int $key, mixed $default = null): mixed;

    public function set(string|int $key, mixed $value): void;

    public function remove(string|int $key): void;

    public function push(mixed ...$value): void;

    public function pop(): mixed;

    public function shift(): mixed;

    public function unshift(mixed ...$value): void;

    public function each(callable $callback, mixed ...$args): static;

    public function keyBy(string|callable $key): static;

    public function pluck(string|callable $key): static;

    public function keys(): static;

    public function values(): static;

    public function slice(int $start, ?int $length = null): static;

    public function merge(Collection $collection): static;

    public function groupBy(string|callable $callback): static;

    public function first(?callable $callback = null): mixed;

    public function contains(mixed $value): bool;

    public function shuffle(): static;

    public function chunk(int $length): static;

    public function filter(callable $callback): static;

    public function reduce(callable $callback, mixed $initial = null): mixed;
}