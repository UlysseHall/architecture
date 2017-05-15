<?php
namespace App\Core;

class Route 
{
    private $listRoutes = ["home", "tender", "listNews", "contact", "listJournals", "journalView", "order", "subscribe"];
    
    public static function errorPage()
	{
		header("HTTP/1.0 404 Not Found");
    	require("pages/404.php");
        exit;
	}
    
    public function getController($route = false) 
    {
        if(!$route) {
            return "Main.php";
        }
        elseif(in_array($route, $this->listRoutes)) {
            
            switch($route) {
                case "home":
                case "tender":
                case "listNews":
                case "contact":
                    $controller = "Main.php";
                    break;
                    
                case "listJournals":
                case "journalView":
                    $controller = "Journal.php";
                    break;
                    
                case "order":
                case "subscribe":
                    $controller = "Order.php";
                    break;
            }
            
            return $controller;
        }
        else {
            return $this->errorPage();
        }
    }
    
}