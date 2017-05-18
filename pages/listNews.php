<div class="banner backgroundList">
	<h1>Actualités <br>
  Désormais en accès libre </h1>
</div>


<?php
foreach($data["cont"]["news"] as $news) : ?>
	<div class="containerListActu">
	<a href="">
		<h4>Date : 	<?php echo $news->getDate(); ?></h4>
		<h2><?php echo $news->getArchitect(); ?><div class="underline"></div></h2>
		<h3><?php echo $news->getTitle(); ?> <br>
	<?php echo $news->getCity(); ?></h3>
	<div class="containerListActuImg">
		<img class="mainImg" src="public/images/img-content/<?php echo $news->getImg()[0]; ?>" alt="">
		<button>
		DECOUVRIR
		</button>
	
		<img class="secondaryImg" src="public/images/img-content/<?php echo $news->getImg()[1]; ?>" alt="">
	</div>
	</div>
</a>
<?php
endforeach;
?>