<?php
/**
 * Created by PhpStorm.
 * User: Igor Klekotnev
 * Date: 01.10.2017
 * Time: 13:24
 */

class FormsHelper extends \GF\Core\AbstractHelper
{
    private $name;

    public function __construct($formName)
    {
        $this->name = $formName;
    }

    public function getForm($modelName)
    {
        $modelInstance = new $modelName;
    }
}