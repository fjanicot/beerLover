<?php

namespace App\Controller;

use App\Core\ViewManager;

class MainController
{
    public function home(): void
    {
        $view = new ViewManager();
        $view->render('main/home', [
            'title' => 'BeerLover, votre cave à bière numérique',
        ]);
    }

    public function about(): void
    {
        $view = new ViewManager();
        $view->render('main/about', [
            'title' => 'Faites connaisances avec BeerLover, notre savoir-faire et nos valeurs houblonnées',
        ]);
    }
}
