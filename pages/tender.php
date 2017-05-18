<div class="banner backgroundTender">
	<h1>Appel d’offre <br>
		Ne ratez plus aucun appel d’offres</h1>
</div>

<div class="aboutTender">
	<p>
		DoubleTrade vous accompagne depuis 1998 sur l’ensemble du processus  de veille et de gestion commerciale sur les marchés publics et projets privés.
	</p>
</div>
<div class="containerMentionTender">
	<button class="buttonTender">
		<img src="public/images/img-layout/right-arrow.png" alt=""><a href="">Consultez</a>
	</button>
	<div class="containerIframe">
	<iframe class="iframeMaggle" src="http://www.doubletrade.com" width="80%"  height="0px" margin-left="10%" clear="both"></iframe>
	</div>
</div>
	<p class="mentionTender">DoubleTrade conserve plus de 12 584 582 annonces dans sa base historique.</p>

<script type="text/javascript">

	var iframeMaggle = document.querySelector('.iframeMaggle');
	var buttonMaggle = document.querySelector('.buttonTender');

	buttonMaggle.addEventListener('click', function(e){
		e.preventDefault();
		if (iframeMaggle.style.height === "800px") {
			iframeMaggle.style.height = "0px";
		}

		else{
			iframeMaggle.style.height = "800px";
		}
	})
</script>