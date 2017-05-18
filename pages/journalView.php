<?php
$magasine = $data["cont"]["journal"];
?>

<!--revue---------------------------------->
<div id="revue-full-size">
    <div class="revue-full-size-width">
        <figure>
            <img src="public/images/img-content/<?php echo $magasine->getImg(); ?>" alt="">
            <figcaption>
                <p class="revue-prix">Prix : 17.99€</p>
            </figcaption>
            <div>
                <a href="<?php echo $magasine->getPdf(); ?>"><button class="buttonJournalView"><p>Voir PDF</p></button></a>
                <a href="index.php?action=order"><button class="buttonJournalView"><p>Acheter</p></button></a>

            </div>
        </figure>
    </div>
</div>
<!--liste partenaires---------------------------------->
<?php echo $magasine->getPartners(); ?>