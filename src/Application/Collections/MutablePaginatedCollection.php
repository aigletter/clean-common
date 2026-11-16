<?php

namespace Aigletter\CleanCommon\Application\Collections;

use Aigletter\CleanCommon\Domain\Collections\MutableCollection;

interface MutablePaginatedCollection extends MutableCollection
{
    public function total(): int;

    public function toImmutable(): PaginatedCollection;
}