<?php

namespace Aigletter\CleanCommon\Utils\Helper;

interface StringHelperInterface
{
    public function isFirstLower(string $value): bool;

    public function isFirstUpper(string $value): bool;

    public function firstToLower(string $value): string;

    public function firstToUpper(string $value): string;

    public function toCamelCase(string $str, $lowerFirst = true): string;

    public function toSnakeCase(string $str): string;

    public function toKebabCase(string $str): string;
}