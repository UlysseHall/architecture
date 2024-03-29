<?php
namespace App\Core;

class Route 
{
    private $listRoutes = ["home", "tender", "listNews", "contact", "listJournals", "journalView", "order", "subscribe", "admin_home", "admin_single", "admin_form", "validation", "newsView", "login", "mentions"];
    
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
                case "newsView":
                case "login":
                case "mentions":
                    $controller = "Main";
                    break;
                    
                case "listJournals":
                case "journalView":
                    $controller = "Journal";
                    break;
                    
                case "order":
                case "subscribe":
                case "validation":
                    $controller = "Order";
                    break;

                case "admin_home":
                case "admin_single":
                case "admin_form":
                    $controller = "Admin";
                    break;
            }
            
            return $controller;
        }
        else {
            return $this->errorPage();
        }
    }
    
}