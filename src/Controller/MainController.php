<?php

namespace App\Controller;

use App\Service\ViewService;

class MainController
{
    public function home(): void
    {
        $view = new ViewService();
        $view->render('main/home');
    }

    public function about(): void
    {
        $view = new ViewService();
        $view->render('main/about');
    }
}
