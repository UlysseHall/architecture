<?php
use App\Model\Qbuilder;
use App\Model\Magazine;

require_once '../vendor/autoload.php';

$builder = new Qbuilder('magazine');



$magazine = $builder->select('id', 'number', 'img', 'pdf', 'region', 'year', 'second_region')->getClass('App\Model\Magazine');

$magazine = $magazine[0];

var_dump($magazine->getId());

?>

