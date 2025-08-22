<?php

namespace Aigletter\CleanCommon\Domain\Collection;

interface MakeCollectionInterface
{
    public function make(array $items = []): Collection;
}