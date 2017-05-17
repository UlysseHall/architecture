<div id="magazine-de-reference">
    <div class="magazine-de-reference-width clearfix">
        <div>
            <h1>Magazine de référence. Partout, tout le temps.<br> Choisissez la formule d'abonnement qui vous convient.</h1>
        </div>
    </div>
</div>
<div id="section-formules">
    <div class="section-formules-width clearfix">
        <?php
            foreach($data["cont"]["formules"] as $formule) {
        ?>
        <article>
            <div class="formule">
                <h3>Formule <?php echo($formule->name); ?></h3>
            </div>
            <div class="description">
                <p><?php echo($formule->description); ?></p>
            </div>
            <div class="prix">
                <p><?php echo($formule->price); ?>0€ / mois</p>
            </div>
            <div class="sans-engagement">
                <p>Sans Engagement</p>
            </div>
            <div class="abonnement-formule">
                <a href="index.php?action=subscribe&id=<?php echo($formule->id); ?>"><button>S'abonner</button></a>
            </div>
        </article>
        <?php } ?>
    </div>
</div>
<div id="frais-de-port">
    <div class="frais-de-port-width clearfix">
        <div class="frais-de-port">
            <p>+ 5€ de frais de port</p>
        </div>
    </div>
</div>
<div id="abonnement-pour-ami-proche">
    <div class="abonnement-pour-ami-proche-width">
        <div>
            <h1>Vous souhaitez offrir un abonnement à un ami ou un proche ?</h1>
        </div>
        <div class="abonnement-bouton">
            <a href="index.php?action=subscribe"><button>S'abonner</button></a>
            <img src="public/images/img-layout/supermarket-gift.png">
        </div>
    </div>
</div>