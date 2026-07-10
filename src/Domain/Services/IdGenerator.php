<?php

namespace Aigletter\CleanCommon\Domain\Services;

interface IdGenerator
{
    public function generate(): string;
}