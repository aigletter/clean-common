<?php

namespace Aigletter\CleanCommon\Domain\Collection;

interface MakeCollectionInterface
{
    public function makeCollection(array $items = []): Collection;
}