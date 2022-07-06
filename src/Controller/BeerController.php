<?php

namespace App\Controller;

use App\Service\ViewService;

class BeerController
{
    public function list(): void
    {
        $view = new ViewService();
        $view->render('beer/list');
    }
}
