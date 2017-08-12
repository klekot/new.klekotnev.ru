<?php
/**
 * Created by PhpStorm.
 * User: Igor Klekotnev
 * Date: 13.08.17
 * Time: 0:10
 */

namespace Music\controllers;


use GF\Core\AbstractController;

class RaritetsController extends AbstractController
{
    public function nuagesComboAction()
    {
        $this->view->show();
    }

    public function anythingAction()
    {
        $this->view->show();
    }
}