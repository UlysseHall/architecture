<?php
namespace App\Controller;
use App\Model\Qbuilder;

class Order
{
	public function orderAction()
    {
        $builderFor = new Qbuilder("formule");
        
        $formules = $builderFor->select()->get();
        
        return(["page" => "order.php", "cont" => ["formules" => $formules], "title" => 'Order']);
    }
    
    public function subscribeAction()
    {
        $builderFor = new Qbuilder("formule");
        
        if(isset($_GET["id"])) {
            $id = intval($_GET["id"]);
        }
        else {
            $id = 1;
        }
        
        $formuleArr = $builderFor->select()->where($id)->get();
        $formule = array_values($formuleArr);
        $formule = array_shift($formule);
        
        return(["page" => "subscribe.php", "cont" => ["formule" => $formule], "title" => 'Soucrire']);
    }
    
    public function validationAction()
    {
        return(["page" => "validation.php"]);
    }
}