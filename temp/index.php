<?php
use App\Model\Qbuilder;
use App\Model\Magazine;

require_once '../vendor/autoload.php';

$builder = new Qbuilder('magazine');

echo "<pre>";

// $magazine = $builder->select('id', 'number', 'img', 'pdf', 'region', 'year', 'second_region')->getClass('App\Model\Magazine');

// // var_dump($magazine);

// $magazine = $magazine[0];




// $magazine->setYear(1989);
// $magazine->setRegion(118);


// $update = $magazine->getAll();

// // var_dump($update);

// $builder->update($update)->where($magazine->getId())->get();

// $mag = $builder->select('id', 'number', 'img', 'pdf', 'region', 'year', 'second_region')->getClass('App\Model\Magazine');

// $mag = $mag[0];



$magazine = new Magazine();

$magazine->setNumber(7);
$magazine->setImg('bravo.gif');
$magazine->setPdf('http://www.taylorswift.com/');
$magazine->setRegion(92);
$magazine->setYear(1994);


$test = $magazine->getAll();

$builder = new Qbuilder('magazine');
$builder->insert($test)->get();

$magazine = $builder->select('id', 'number', 'img', 'pdf', 'region', 'year', 'second_region')->getClass('App\Model\Magazine');


foreach ($magazine as $mag) :
?>

<ul>
	<li>id : <?= $mag->getId() ?></li>
	<li>num : <?= $mag->getNumber() ?></li>
	<li>img (bug) : <?= $mag->getImg() ?></li>
	<li>pdf : <?= $mag->getPdf() ?></li>
	<li>region : <?= $mag->getRegion() ?></li>
	<li>year : <?= $mag->getYear() ?></li>
	<li>second_region : <?= $mag->getSecond_region() ?></li>
</ul>
<?php
endforeach;
