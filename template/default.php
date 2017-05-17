<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
	<title>Larchitecture</title>
	<link rel="stylesheet" href="public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Hind:400,500,600" rel="stylesheet">
</head>
<body>
    <?php
        if($controllerName != "Admin") {
    ?>
    <input type="checkbox" id="check1" name=""/>
	<nav class="navPhone">
		<ul class="mainNav">
			<label for="check1">
				<li class="choice">
				<span></span>
				<span></span>
				<span></span>
				</li>
			</label>
		</ul>
		<div class="contentMenuPhone">
		<ul>
			<li><a href="">Menu</a></li>
			<li><a href="">Actualité</a></li>
			<li><a href="">etc</a></li>
			<li><a href="">etc</a></li>
			<li><a href="">etc</a></li>
		</ul>
		</div>
	</nav>
	<header>
		<ul>
			<li><a href=""><img class="logo" src="public/images/img-layout/logo_larchitecture_black.png" alt=""></a></li>
			<li><a href="">magasines</a></li>
			<li><a href="">appel d'offre</a></li>
			<li><a href="">atualités</a></li>
			<li><a href="">contact</a></li>
			<li><a href="">abonnez-vous</a></li>
			<li><a href=""><img class="logoLang" src="public/images/img-layout/france.png" alt=""> fr <img src="public/images/img-layout/cross_bottom.png" alt=""></a></li>
		</ul>
	</header>
	<?php } ?>

<?php require("pages/" . $data["page"]); ?>

    <footer>
		<div class="containerFooter">
			<div class="containerLeft">
				<h2>Contact</h2>
				<form action="">
					<label for="nom">
						Nom <span class="decorationStar">*</span><br>
						<input type="text" name="nom" value="" required>
					</label>
					<label for="prenom">
						Prénom <span class="decorationStar">*</span><br>
						<input type="text" name="prenom" value=""><br>
					</label>
					<label for="telephone">
						Téléphone <span class="decorationStar">*</span><br>
						<input type="text" name="telephone" value=""><br>
					</label>
					Commentaire <span class="decorationStar">*</span><br>
					<textarea name="textarea" rows="10" cols="50">
					</textarea><br>
					<select id="select">
						<option value="valeur1">Commercial</option> 
						<option value="valeur2">Rédactionnel / Publicité</option>
						<option value="valeur3">Administratif / Compatibilité</option>
						<option value="valeur3">Direction</option>
					</select><br>
					<input type="submit" value="Submit">
				</form> 
			</div>
			<div class="containerRight">
				<h2>Informations</h2>
				<h3>Siège social</h3>
				<p>SOFRE&COM <br>
					9/11 rue Jacquard <br>
					93315 Le Pré Saint Gervais cedex - France <br>
					Tél : +33 (1) 49 91 93 99 <br>
					Fax : +33 (1) 49 91 94 20</p>
					<h3>Crédit</h3>
					<p><span>Conception et contenus :</span> SOFRE&COM</p>
					<h2 class="social">Social</h2>
					<ul>
						<li><a href=""><img src="public/images/img-layout/facebook.png" alt=""></a></li>
						<li><a href=""><img src="public/images/img-layout/facebook.png" alt=""></a></li>
						<li><a href=""><img src="public/images/img-layout/facebook.png" alt=""></a></li>
						<li><a href=""><img src="public/images/img-layout/facebook.png" alt=""></a></li>
					</ul>
					<p>
						Or contact us by email <br>
						<span class="support"><a href="">support@weebly.com</a></span>
					</p>
				</div>
			</div>		
		</footer>
</body>
</html>