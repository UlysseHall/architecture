<?php
use App\Core\Route;
use App\Controller\Journal;
use App\Controller\Main;
use App\Controller\Order;
use App\Controller\Admin;

require_once "vendor/autoload.php";

$routeManager = new Route();

if(isset($_GET["action"]) && !is_null($_GET["action"])) {
    $action = $_GET["action"];
    $controller = $routeManager->getController($action);
}
else {
    $action = "home";
    $controller = "Main";
}

$controller = "App\Controller\\".$controller;
$controller = new $controller();
$action = $action . "Action";
$data = $controller->$action();

require("template/default.php");