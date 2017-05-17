<?php
$news = $data["cont"]["news"];
$key = 0;
?>

<div style="background-image: url('public/images/img-content/<?php echo $news->getImg()[0]; ?>'); background-size: cover;" class="banner">
	<h1><?php echo $news->getArchitect(); ?><br>
  <?php echo $news->getTitle(); ?></h1>
</div>
<div class="containerInfoListNews">
<h2><?php echo $news->getTitle(); ?><div class="underline"></div></h2>
	<p>
		<?php echo $news->getDescription(); ?>
	</p>
		<img src="public/images/img-content/<?php echo $news->getImg()[0]; ?>" alt="">
</div>
<div class="containerImg">
<h2>Galerie<div class="underline"></div></h2>
<ul>
	<?php
	foreach($data["cont"]["news"]->getImg() as $img){ 
		if ($key != 0) {
		?>
		<li><img src="public/images/img-content/<?php echo $img; ?>" alt=""></li>
	<?php
	}
	$key++;
	}
	?>
</ul>
</div>
</div>
<div class="containerInfolist">
	<?php echo $news->getInfos(); ?>
</div>