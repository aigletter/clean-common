<?php

namespace Aigletter\CleanCommon\Utils\Helper;

/**
 * @deprecated
 */
class StringHelperRegistry
{
    private static StringHelper $helper;

    public static function setHelper(StringHelper $helper): void
    {
        self::$helper = $helper;
    }

    public function getHelper(): StringHelper
    {
        return self::$helper;
    }
}