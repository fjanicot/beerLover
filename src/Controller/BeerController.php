<?php

namespace App\Controller;

use App\Core\ViewManager;

class BeerController
{
    public function list(): void
    {
        $view = new ViewManager();
        $view->render('beer/list', [
            'title' => 'Découvrez notre catalogue de breuvages extraordinairement houblonnés',
        ]);
    }
}
