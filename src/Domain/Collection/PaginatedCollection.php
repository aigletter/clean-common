<?php

namespace Aigletter\CleanCommon\Domain\Collection;

interface PaginatedCollection extends Collection
{
    public function total(): int;
}