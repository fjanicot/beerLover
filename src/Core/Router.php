<?php

namespace App\Core;

use App\Controller\BeerController;
use App\Controller\MainController;

class Router
{
    const CONFIG_PATH = '../config/routes.yaml';
    private array $routes;

    public function __construct()
    {
        $this->routes = yaml_parse_file(self::CONFIG_PATH);
    }

    public function match(string $uri): ?array
    {
        var_dump($this->routes);
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
