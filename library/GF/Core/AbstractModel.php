<?php

/**
 *
 */
namespace GF\Core;

abstract class AbstractModel extends \ActiveRecord\Model
{
    public static function getModels()
    {
        $modelNames = array();
        $modelFiles = scandir(MODELS);
        foreach ($modelFiles as $modelFile) {
            if (in_array($modelFile, array('.', '..'))) continue;
            $modelName = explode('.', $modelFile);
            $modelClass = new $modelName[0];
            $modelNames[] = array('class' => $modelName[0], 'name' => $modelClass::MODEL_NAME);
        }
        return $modelNames;
    }
}