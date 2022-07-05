<?php
require_once "../vendor/autoload.php";

use App\Controller\MainController;

$controller = new MainController();
$controller->home();