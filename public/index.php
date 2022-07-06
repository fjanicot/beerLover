<?php
require_once "../vendor/autoload.php";

use App\Controller\MainController;
use App\Core\Router;

$uri = $_SERVER['PATH_INFO'] ?? '/';

$controller = new MainController();
$router = new Router();
$method = $router->match($uri);

if($method){
    $controller->$method();
}else{
    http_response_code(404);
}
