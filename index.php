<?php
use App\Core\Route;
require_once "vendor/autoload.php";

$routeManager = new Route();

if(isset($_GET["action"]) && !is_null($_GET["action"])) {
    $action = $_GET["action"];
    $controller = $routeManager->getController($action);
}
else {
    $action = "home";
    $controller = "Main.php";
}

require("app/controller/" . $controller);
echo("controller : <b>" . $controller . "</b> action : <b>" . $action . "</b>");