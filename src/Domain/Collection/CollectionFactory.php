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
        return self::$factory->makeCollection($items);
    }
}