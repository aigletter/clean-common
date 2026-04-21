<?php

namespace Aigletter\CleanCommon\Domain\Collection;

interface MakeCollectionInterface
{
    public function make(array $items = []): Collection;

    public function makePaginated(array $items = [], int $total = 0): PaginatedCollection;
}