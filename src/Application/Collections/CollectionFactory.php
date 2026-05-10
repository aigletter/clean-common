<?php

namespace Aigletter\CleanCommon\Application\Collections;

use Aigletter\CleanCommon\Domain\Collections\Collection;

interface CollectionFactory
{
    public function make(array $items = []): Collection;

    //public function makePaginated(array $items = [], int $total = 0): PaginatedCollection;
}