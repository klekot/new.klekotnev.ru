<?php

/**
 *
 */
namespace Main\controllers;

use \GF\Core\AbstractController as AbstractController;

class IndexController extends AbstractController
{
    public function contactAction()
    {
        $user = \User::find_by_name('Igor');
        $this->view->user = $user;
        $this->view->show();
    }

    public function thanksAction()
    {
        $this->view->show();
    }

    public function searchAction()
    {
        $this->view->title = 'search';
        $this->view->show();
    }
}