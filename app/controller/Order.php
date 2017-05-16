<?php
namespace App\Controller;

class Order
{
	public function orderAction()
    {
        return(["page" => "order.php"]);
    }
    
    public function subscribeAction()
    {
        return(["page" => "subscribe.php"]);
    }
}