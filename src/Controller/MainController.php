<?php
namespace App\Controller;

class MainController
{
    public function home(): void
    {
        $view->render('main/home');
    }
}