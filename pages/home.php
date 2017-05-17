	<section class="acceuil">
		<div class="container">
		<article>
				<h1>BIENVENUE<div class="underline"></div></h1>
			<p>
				L'Architecture de votre région propose un panorama détaillé de	l'architecture d'une région, d'un territoire ou d'un pays.
			</p>
			</div>
		</article>
	</section>
	<div class="containerMagasine">
		<h2>NOUVEAUX MAGAZINES 2017<div class="underline"></div></h2>
		<section>
		<?php
		foreach($data["cont"]["journals"] as $magasine){ ?>

			<article><a href=""><img src='public/images/img-content/<?php echo $magasine->getImg(); ?>' alt=''><p class='alignTitle'><?php echo $magasine->getRegion(); ?></p></a></article>
		<?php
		}
		?>
		</section>
		<button>
			explorez
		</button>
	</div>
	<div class="containerActu">
		<h2>ACTUALITES<div class="underline"></div></h2>
		<section>
			<article><img src="../public/images/img-content/wow_un_immeuble.jpg" alt="	"><div class="containerInfoActu"><h3>ABH Architect<div class="underline"></div></h3><p>Projet Astrale - Construction d’un ensemble de bureaux au Plessis Robinson (92)</p></div></article>
			<article><img src="../public/images/img-content/wow_un_immeuble.jpg" alt="	"><div class="containerInfoActu"><h3>ABH Architect<div class="underline"></div></h3><p>Projet Astrale - Construction d’un ensemble de bureaux au Plessis Robinson (92)</p></div></article>
			<article><img src="../public/images/img-content/wow_un_immeuble.jpg" alt="	"><div class="containerInfoActu"><h3>ABH Architect<div class="underline"></div></h3><p>Projet Astrale - Construction d’un ensemble de bureaux au Plessis Robinson (92)</p></div></article>
			<article><img src="../public/images/img-content/wow_un_immeuble.jpg" alt="	"><div class="containerInfoActu"><h3>ABH Architect<div class="underline"></div></h3><p>Projet Astrale - Construction d’un ensemble de bureaux au Plessis Robinson (92)</p></div></article>
		</section>
	</div>
	<div class="containerWho">
		<img src="../public/images/img-content/travail_equipe.jpg" alt="">
		<h2>Qui sommes-nous ?<div class="underline"></div></h2>
			<p>
			Les sondages réalisés attestent de sa durée de vie et par son aspect référentiel, de sa fréquente consultation. <br><br>

Une part prépondérante est laissée à "l'image" - le soin apporté aux reproductions photographiques est la garantie d'une attention particulière des lecteurs. <br><br>

La revue "L'Architecture de votre région" est le témoignage des hommes qui construisent aujourd'hui. Elle constitue ainsi la vitrine de leur création.
		</p>
	</div>
	<div class="containerDescOne">
		<div class="containerTxtDesc">
			<h2>UNE APPROCHE REGIONALE<div class="underline"></div></h2>
			<p>
Véritable vitrine de la création architecturale d'une région ou d'un pays, elle est réalisée avec le concours des architectes représentatifs de la construction, du bâtiment, de l'urbanisme, de l'environnement et de l'aménagement du territoire. </p>
		</div>
		<img src="../public/images/img-content/un_gratte_ciel.jpg" alt="">
	</div>

	<div class="containerDescTwo">
		<div class="containerTxtDesc">
			<h2>UNE PRESENCE REGIONALE, NATIONALE ET INTERNALITIONAL<div class="underline"></div></h2>
			<p>La revue est une vitrine pour chaque architecte, quelle que soit sa taille et sa situation géographique. De même, l'annonceur peut définir l'étendue de sa campagne : la limiter à une seule région, l'étendre à plusieurs régions ou à un pays.</p>
		</div>
		<img src="../public/images/img-content/un_gratte_ciel.jpg" alt="">
	</div>