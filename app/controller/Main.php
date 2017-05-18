<?php
namespace App\Controller;
use App\Model\Qbuilder;
use App\Core\Route;

class Main
{
    public function homeAction()
    {
        $builderMag = new Qbuilder("magazine");
        $builderNews = new Qbuilder("news");
        
        $lastJournals = $builderMag->select("id", "img", "region")->order("year", "desc")->limit(4)->getClass("App\Model\Magazine");
        
        $lastNews = $builderNews->select("id", "architect", "title", "img")->order("date", "desc")->limit(4)->getClass("App\Model\News");
        
        foreach($lastNews as $news) {
            $encoded = $news->getImg();
            $news->setImg(json_decode($encoded));
        }
        return(["page" => "home.php", "cont" => ["journals" => $lastJournals, "news" => $lastNews], "title" => 'Accueil']);
    }
    
    public function tenderAction()
    {
        return(["page" => "tender.php", "title" => "Appel d'offre"]);
    }

    public function listNewsAction()
    {
        $builderNews = new Qbuilder("news");
        
        $allNews = $builderNews->select("id", "date", "architect", "title", "img", "city")->order("date", "desc")->getClass("App\Model\News");
        
        foreach($allNews as $news) {
            $encoded = $news->getImg();
            $news->setImg(json_decode($encoded));
        }
        
        return(["page" => "listNews.php", "cont" => ["news" => $allNews], "title" => 'Liste actualité']);
    }
    
    public function newsViewAction()
    {
        if(isset($_GET["id"])) {
            $id = intval($_GET["id"]);
        }
        else {
            
            return Route::errorPage();
        }
        
        $builderNews = new Qbuilder("news");
        
        $news = $builderNews->select()->where($id)->getClass("App\Model\News");
        
        if(count($news) == 0) {
            
            return Route::errorPage();
        }
        
        $news = array_values($news);
        $news = array_shift($news);
        $encoded = $news->getImg();
        $news->setImg(json_decode($encoded));
        
        return(["page" => "newsView.php", "cont" => ["news" => $news], "title" => 'Actualités']);
    }
    
    public function loginAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = htmlspecialchars($_POST["username"]);
            $password = sha1(htmlspecialchars($_POST["password"]));
            
            $builderAdmin = new Qbuilder("admin");
            $admin = $builderAdmin->select()->get();
            $admin = array_shift($admin);
            
            if($admin->username == $username && $admin->password == $password) {
                $_SESSION["admin"] = true;
                return header("Location: index.php?action=admin_home");
            }
            else {
                return header("Location: index.php?action=login");
            }
        }
        else {
            return(["page" => "login.php"]);
        }
    }
    
    public function mentionsAction()
    {
        return(["page" => "mentions.php", "title" => "Mentions légales"]);
    }
}
