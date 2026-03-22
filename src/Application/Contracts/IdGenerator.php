<?php

namespace Aigletter\CleanCommon\Application\Contracts;

interface IdGenerator
{
    public function generateId(): string;
}