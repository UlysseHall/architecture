<?php
namespace App\Controller;
use App\Model\Qbuilder;

class Main
{
    public function homeAction()
    {
        $builderMag = new Qbuilder("magazine");
        $builderNews = new Qbuilder("news");
        
        $lastJournals = $builderMag->select("img", "region")->order("year", "desc")->limit(4)->getClass("App\Model\Magazine");
        
        $lastNews = $builderNews->select("architect", "title", "img")->order("date", "desc")->limit(4)->getClass("App\Model\News");
        
        return(["page" => "home.php", "cont" => ["journals" => $lastJournals, "news" => $lastNews]]);
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