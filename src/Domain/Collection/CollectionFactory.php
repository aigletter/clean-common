<?php

namespace Aigletter\CleanCommon\Domain\Collection;

class CollectionFactory
{
    private static MakeCollectionInterface $factory;
    
    public static function setFactory(MakeCollectionInterface $factory): void
    {
        self::$factory = $factory;
    }

    public static function make(array $items = []): Collection
    {
        return self::$factory->make($items);
    }

    public static function makePaginated(array $items = [], int $total = 0): PaginatedCollection
    {
        return self::$factory->makePaginated($items, $total);
    }
}