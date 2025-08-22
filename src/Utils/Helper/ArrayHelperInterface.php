<?php

namespace Aigletter\CleanCommon\Utils\Helper;

interface ArrayHelperInterface
{
    public static function groupBy(array $array, string|callable $key): array;

    public static function isAssociative(array $array): bool;

    public static function mergeRecursive(array $first, array $second): array;
}