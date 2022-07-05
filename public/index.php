<?php
require_once "../src/Controller/MainController.php";
require_once "../src/Service/ViewService.php";

use App\Controller\MainController;

$controller = new MainController();
$controller->home();