<?php
namespace App\Controller;
use App\Model\Qbuilder;
use App\Core\Route;

class Journal
{
	public function listJournalsAction()
    {
        $builderMag = new Qbuilder("magazine");
        
        $listJournals = $builderMag->select()->order("number", "desc")->getClass("App\Model\Magazine");
        
        return(["page" => "listJournals.php", "cont" => ["journals" => $listJournals]]);
    }
    
    public function journalViewAction()
    {
        $builderMag = new Qbuilder("magazine");
        
        if(isset($_GET["id"])) {
            $id = intval($_GET["id"]);
        }
        else {
            Route::errorPage();
        }
        
        $journal = $builderMag->select()->where($id)->getClass("App\Model\Magazine");
        
        if(count($journal) == 0) {
            Route::errorPage();
        }
        
        $journal = array_shift(array_values($journal));
        
        return(["page" => "journalView.php", "cont" => ["journal" => $journal]]);
    }
}