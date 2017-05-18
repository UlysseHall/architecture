<div class="banner backgroundListJournals"><h1>L’architecture de vos régions. <br>
       Papier + numérique <br>
           <span class="list-journal-sans-engagement">Sans engagement</span> <br>
</h1>
</div>
<div class="containerListJournal">
	<h2>L’architecture de votre région 2017 <div class="underline"></div></h2>
	<p>Profitez des meilleures revues d’architecture grâce à notre offre 	d’abonnement magazine à petit prix. Un catalogue de magazines 	d’architecture de référence pour les professionnels et pour le grand 	public.  Vous êtes architecte, urbaniste, designer, ingénieur ou 	étudiant en architecture ?Amateur de beaux édifices et 	d’innovations, en quête d’inspirations, de conseils d’aménagement, 	de construction, de rénovation...
	</p>
	<p>
	Pour enrichir vos connaissances en architecture, commandez tout 	simplement votre abonnement magazine à prix réduit en l’ajoutant à 	votre panier d’achat.
	</p>
	<p class="containerPrice">
		À partir de 17,90 € / mois
		<img src="public/images/img-layout/coin.png" alt="">
	</p>
	<form class="search-container">
    <input type="text" id="search-bar" placeholder="Rechercher par région...">
    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  	</form>
	<section>

	<?php
		foreach($data["cont"]["journals"] as $magasine){ ?>
		<article>
			<div class="containerImg">
			<img src="public/images/img-content/<?php echo $magasine->getImg(); ?>" alt=''>
			<h5><?php echo $magasine->getRegion(); ?></h5>
			<div class="hover">
				<h4>
					Revue n°<?php echo $magasine->getNumber(); ?>
				</h4>
				<a href="index.php?action=journalView&id=<?php echo($magasine->getId()); ?>">
                    <button>
                        Voir
                    </button>
                </a>
                
                <a href="index.php?action=order">
                    <button>
                        Commander
                    </button>
                </a>
			</div>
			</div>
		</article>
		<?php
		}
		?>
	</section>
</div>