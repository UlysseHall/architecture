<?php
namespace App\Controller;
use App\Model\Qbuilder;

class Main
{
    public function homeAction()
    {
        $builder = new Qbuilder("magazine");
        $lastJournals = $builder->select("img", "region")->order("year", "desc")->limit(4)->getClass("App\Model\Magazine");

        return(["page" => "home.php", "cont" => ["journals" => $lastJournals]]);
    }
    
    public function tenderAction()
    {
        return(["page" => "tender.php"]);
    }
    
    public function listNewsAction()
    {
        return(["page" => "listNews.php"]);
    }
    
    public function contactAction()
    {
        return(["page" => "contact.php"]);
    }
}