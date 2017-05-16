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
        $builderNews = new Qbuilder("news");
        
        $allNews = $builderNews->select("date", "architect", "title", "img")->order("date", "desc")->getClass("App\Model\News");
        
        return(["page" => "listNews.php", "cont" => ["news" => $allNews]]);
    }
    
    public function contactAction()
    {
        return(["page" => "contact.php"]);
    }
}