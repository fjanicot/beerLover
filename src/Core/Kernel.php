<?php

namespace App\Core;

class Kernel
{
    public function handle()
    {
        $uri = $_SERVER['PATH_INFO'] ?? '/';

        $router = new Router();
        $route = $router->match($uri);

        if($route){
            $method = $route['method'];
            
            $controller = new $route['controller']();
            $controller->$method();
        }else{
            http_response_code(404);
        }
    }
}
