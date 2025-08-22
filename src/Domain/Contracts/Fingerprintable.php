<?php

namespace Aigletter\CleanCommon\Domain\Contracts;

interface Fingerprintable
{
    public function fingerprint(): string;
}