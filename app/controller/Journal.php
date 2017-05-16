<?php
namespace App\Controller;

class Journal
{
	public function listJournalsAction()
    {
        return(["page" => "listJournals.php"]);
    }
    
    public function journalViewAction()
    {
        return(["page" => "journalView.php"]);
    }
}