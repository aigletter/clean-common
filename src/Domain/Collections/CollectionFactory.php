<?php

namespace Aigletter\CleanCommon\Domain\Collections;

interface CollectionFactory
{
    public function make(array $items = []): Collection;

    //public function makePaginated(array $items = [], int $total = 0): PaginatedCollection;
}