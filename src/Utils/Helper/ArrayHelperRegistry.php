<?php

namespace Aigletter\CleanCommon\Utils\Helper;

use Aigletter\CleanCommon\Utils\Helper\ArrayHelper;

/**
 * @deprecated
 */
class ArrayHelperRegistry
{
    private static ArrayHelper $helper;

    public static function setHelper(ArrayHelper $helper): void
    {
        self::$helper = $helper;
    }

    public function getHelper(): ArrayHelper
    {
        return self::$helper;
    }
}