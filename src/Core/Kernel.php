<?php

namespace App\Core;

use App\Controller\MainController;

class Kernel
{
    public function handle()
    {
        $uri = $_SERVER['PATH_INFO'] ?? '/';

        $controller = new MainController();
        $router = new Router();
        $method = $router->match($uri);

        if($method){
            $controller->$method();
        }else{
            http_response_code(404);
        }
    }
}
