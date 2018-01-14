<?php
/**
 * Created by PhpStorm.
 * User: Igor Klekotnev
 * Date: 03.09.2017
 * Time: 2:04
 */

namespace GF\Core;


abstract class AbstractHelper
{
    public static function getHelpers()
    {
        $helperNames = array();
        $helperFiles = scandir(HELPERS);
        foreach ($helperFiles as $helperFile) {
            if (in_array($helperFile, array('.', '..'))) continue;
            $helperName = explode('.', $helperFile);
            $helperNames[] = $helperName[0];
        }
        return $helperNames;
    }
}