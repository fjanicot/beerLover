<?php

namespace App\Core;

use App\Controller\BeerController;
use App\Controller\MainController;

class Router
{
    public function __construct()
    {
        $routes = yaml_parse_file('../config/routes.yaml');
        var_dump($routes);die();
    }

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
