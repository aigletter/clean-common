<?php

namespace Aigletter\CleanCommon\Application\Collections;

use Aigletter\CleanCommon\Domain\Collections\Collection;

interface PaginatedCollection extends Collection
{
    public function total(): int;
}