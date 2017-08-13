<?php

namespace Music\controllers;

use \GF\Core\AbstractController as AbstractController;
use \UserModel as User;

class PrehistoryController extends AbstractController
{
    public function indexAction()
    {
//        $user = User::find(1);
//        $this->view->user = $user->firstname;
        $this->view->show();
    }
}