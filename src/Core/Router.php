<?php

namespace App\Core;

use App\Controller\BeerController;
use App\Controller\MainController;

class Router
{
    public function match(string $uri): ?array
    {
        if($uri === '/') {
            return [
                'controller' => MainController::class, // App\Controller\MainController
                'method' => 'home',
            ];
        }

        if($uri === '/a-propos'){
            return [
                'controller' => MainController::class,
                'method' => 'about',
            ];
        }

        if($uri === '/bieres'){
            return [
                'controller' => BeerController::class,
                'method' => 'list',
            ];
        }

        return null;
    }
}
