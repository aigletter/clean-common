<?php

namespace Aigletter\CleanCommon\Application\Collections;

interface PaginatedCollectionFactory
{
    public function make(array $items = [], ?int $total = null): PaginatedCollection;
}