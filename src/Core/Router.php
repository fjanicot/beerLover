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
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri) {
                return $route;
            }
        }

        return null;
    }
}
