<?php

namespace Aigletter\CleanCommon\Utils\Helper;

interface StringHelper
{
    public function isLcfirst(string $value): bool;

    public function isUcfirst(string $value): bool;

    public function lcfirst(string $value): string;

    public function ucfirst(string $value): string;

    public function camel(string $value): string;

    public function pascal(string $value): string;

    public function snake(string $value): string;

    public function kebab(string $value): string;

    public function studly(string $value): string;
}