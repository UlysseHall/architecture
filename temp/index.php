<?php
use App\Model\Qbuilder;

require_once '../vendor/autoload.php';

$builder = new Qbuilder('magazine');



$magazine = $builder->select('id', 'number', 'img', 'pdf', 'region', 'year', 'second_region')->getClass('Magazine');


?>

