<?php

namespace Aigletter\CleanCommon\Utils\Helper;

class StringHelperRegistry
{
    private static StringHelperInterface $helper;

    public static function setHelper(StringHelperInterface $helper): void
    {
        self::$helper = $helper;
    }

    public function getHelper(): StringHelperInterface
    {
        return self::$helper;
    }
}