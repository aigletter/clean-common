<?php

namespace Aigletter\CleanCommon\Utils\Helper;

use Aigletter\CleanCommon\Utils\Helper\ArrayHelperInterface;

class ArrayHelperRegistry
{
    private static ArrayHelperInterface $helper;

    public static function setHelper(ArrayHelperInterface $helper): void
    {
        self::$helper = $helper;
    }

    public function getHelper(): ArrayHelperInterface
    {
        return self::$helper;
    }
}