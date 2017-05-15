<?php
use App\Model\Queries\Builder;
use App\Core\Setup;

require_once "vendor/autoload.php";

$build = new Builder('articles', Setup::getConnexion());

echo "<pre>";

$insert = array('titre' => 'Ulysse téma',
				'auteur' => 'Zyigh',
				'commentaire' => 'normalement ça marche...');



// var_dump($build->delete(14)->get());
// $datas = $build->select('id')->get();

// $build->insert($insert)->get();
$datas = $build->select('titre')->select('auteur', 'commentaire')->where(12)->get();


var_dump($datas);

echo "<br>";
