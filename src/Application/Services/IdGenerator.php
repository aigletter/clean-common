<?php

namespace Aigletter\CleanCommon\Application\Services;

interface IdGenerator
{
    public function generate(): string;
}