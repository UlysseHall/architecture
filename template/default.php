<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
	<title>Larchitecture</title>
	<link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/screen.css">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link href="https://fonts.googleapis.com/css?family=Hind:400,500,600" rel="stylesheet">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

     <?php
        if($controllerName == "Admin") {
    ?>

    <!-- Bootstrap core CSS     -->
    <link href="pages/admin/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="pages/admin/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="pages/admin/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="pages/admin/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="pages/admin/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <?php } ?>
</head>
<body>
    <?php
        if($controllerName != "Admin") :
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
			<li><a href="index.php?action=listJournals">magazines</a></li>
			<li><a href="index.php?action=tender">appel d'offre</a></li>
			<li><a href="index.php?action=listNews">actualités</a></li>
			<li><a href="#footer-link-nav">contact</a></li>
			<li><a href="index.php?action=order">abonnez-vous</a></li>
		</ul>
		</div>
	</nav>
	<header>
		<ul>
			<li><a href="index.php"><img class="logo" src="public/images/img-layout/logo_larchitecture_black.png" alt=""></a></li>
 			<li><a href="index.php?action=listJournals">magazines</a></li>
 			<li><a href="index.php?action=tender">appel d'offre</a></li>
 			<li><a href="index.php?action=listNews">atualités</a></li>
 			<li><a href="#footer-link-nav">contact</a></li>
 			<li><a href="index.php?action=order">abonnez-vous</a></li>
			<li><a href=""><img class="logoLang" src="public/images/img-layout/france.png" alt=""> fr <img src="public/images/img-layout/cross_bottom.png" alt=""></a></li>
		</ul>
	</header>
	<?php else :

	 ?>
	<div class="wrapper">
	    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">
	        <div class="sidebar-wrapper">
	            <div class="logo">
	                <a href="index.php?action=admin_home" class="simple-text">
	                    Tableau de bord
	                </a>
	            </div>
	            <ul class="nav">
	                <li class="active">
	                    <a href="index.php?action=admin_home">
	                        <i class="pe-7s-home"></i>
	                        <p>Tableau de bord</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="index.php?action=admin_form&add=1">
	                        <i class="pe-7s-note"></i>
	                        <p>Ajouter</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?= isset($_GET['id']) ? 'index.php?action=admin_form&update=1&id='.$_GET['id'] : "index.php?action=admin_home" ?>">
	                        <i class="pe-7s-tools"></i>
	                        <p>Modifier</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?= isset($_GET['id']) ? 'index.php?action=admin_single&id='.$_GET['id'] : "index.php?action=admin_home" ?>">
	                        <i class="pe-7s-trash"></i>
	                        <p>Supprimer</p>
	                    </a>
	                </li>
	                <li class="active-pro">
	                    <a href="index.php">
	                        <i class="pe-7s-right-arrow"></i>
	                        <p>Aller sur le site</p>
	                    </a>
	                </li>
	            </ul>
	        </div>
	    </div>
	<?php endif; ?>

<?php require("pages/" . $data["page"]); ?>
    
    <?php
        if($controllerName != "Admin") :
    ?>

    <footer id="footer-link-nav" <?php if($action == "orderAction" || $action == "validationAction" || $action == "newsViewAction") { ?> class="footer-stick" <?php } ?>>
		<div class="containerFooter">
			<div class="containerLeft">
				<h2>Une question ? Partagez ça avec nous.</h2>
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
					<label for="services">
                        Services <span class="decorationStar">*</span><br>
					    <select id="select">
                            <option value="valeur1">Commercial</option> 
                            <option value="valeur2">Rédactionnel / Publicité</option>
                            <option value="valeur3">Administratif / Compatibilité</option>
                            <option value="valeur3">Direction</option>
                        </select><br>
					</label>
					Posez votre question ici <span class="decorationStar">*</span><br>
					<textarea name="textarea" rows="10" cols="50">
					</textarea><br>
					<br>
					<center>
                        <div class="form-submit-footer">
                            Envoyer
                        </div>
					</center>
				</form> 
			</div>
			<div class="containerRight">
				<h2>À propos</h2>
				<h3>Siège social</h3>
				<p>SOFRE&COM <br>
                    9/11 rue Jacquard 
                    93315 Le Pré Saint Gervais cedex - France<br>
                    Tél : +33 (1) 49 91 93 99<br>
                    Fax : +33 (1) 49 91 94 20<br>
                </p>
					<h2 class="social">Réseaux Sociaux</h2>
					<ul>
						<li><a href=""><img src="public/images/img-layout/facebook.png" alt=""></a></li>
						<li><a href=""><img src="public/images/img-layout/linkedin.png" alt=""></a></li>
						<li><a href=""><img src="public/images/img-layout/twitter.png" alt=""></a></li>
						<li><a href=""><img src="public/images/img-layout/pinterest.png" alt=""></a></li>
					</ul>
				</div>
				<div class="footer-more-infos">
				    © 2017 L’architecture de votre région - Confidentialité et cookies - Conditions générales - Accessibilité
				</div>
			</div>		
		</footer>
		<?php endif; ?>
</body>
</html>