<?php

namespace Aigletter\CleanCommon\Domain\Collections;

interface CollectionFactory
{
    public function make(array $items = []): Collection;
}