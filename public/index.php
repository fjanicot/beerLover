<?php
require_once "../vendor/autoload.php";

use App\Controller\MainController;

$uri = $_SERVER['PATH_INFO'];

$controller = new MainController();
if($uri === '/'){
    $controller->home();
}else if($uri === '/a-propos'){
    $controller->about();
}else{
    http_response_code(404);
}
