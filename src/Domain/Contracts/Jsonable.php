<?php

namespace Aigletter\CleanCommon\Domain\Contracts;

interface Jsonable
{
    public function toJson(int $options = 0): string;
}