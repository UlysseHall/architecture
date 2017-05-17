<?php
    $formule = $data["cont"]["formule"];
?>
<div id="full-size-main">
    <!--formulaire d'abonnement------------------------------->
    <div id="formule-abonnement">
        <div class="formule-abonnement-width">
            <!--formule integrale----------------------------->
            <div class="formule-integrale">
                <div>
                    <p>Votre formule d'abonnement :</p>
                </div>
                <div class="formule-integrale-titre">
                    <h3>Formule <?php echo($formule->name); ?></h3>
                </div>
                <div class="description-formule">
                    <p><?php echo($formule->description); ?></p>
                </div>
                <div class="image-livre">
                    <figure>
                        <img src="public/images/img-layout/open-magazine%20(2).png">
                    </figure>
                </div>
                <div class="prix-duree">
                    <p><?php echo($formule->price); ?>0€ - Durée libre</p>
                </div>
                <div class="paiement-tous-les-mois">
                    <p>Paiement tous les mois</p>
                </div>
                <div class="sans-engagement">
                    <p>Sans engagament</p>
                </div>
            </div>
            <!--espace securisé------------------------------>
            <div class="espace-securise">
                <div class="position-relative-espace-securise clearfix">
                    <img src="public/images/img-layout/locked.png">
                    <div>
                        <p class="espace-secursise-font-light">Vous êtes dans un espace</p>
                        <p class="espace-secursise-font-bold">100% sécurisé</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--formulaire d'inscription---------------------------->
    <div id="formulaire-inscription">
        <div class="formulaire-inscription-width">
            <form action="index.php?action=validation" method="post">
                <!--créer un compte-------------------------->
                <div class="creer-compte">
                    <div>
                        <h4>1- Créer votre compte</h4>
                    </div>
                    <div class="creer-compte-formulaire">
                        <div class="creer-compte-formulaire-mail">
                            <div>
                                <label>Adresse e-mail: *</label>
                            </div>
                            <div>
                                <input type="email">
                            </div>
                        </div>
                        <div class="creer-compte-formulaire-confirmer-mail clearfix">
                            <div>
                                <label>Confirmation de l'e-mail: *</label>
                            </div>
                            <div>
                                <input type="email">
                            </div>
                        </div>
                    </div>
                </div>
                <!--votre adresse---------------------------->
                <div class="votre-adresse clearfix">
                    <div>
                        <h4>2- Votre adresse</h4>
                    </div>
                    <div class="votre-adresse-formulaire">
                        <div class="prenom">
                            <div>
                                <label>Prénom: *</label>
                            </div>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                        <div class="nom">
                            <div>
                                <label>Nom: *</label>
                            </div>
                            <div>
                                <input type="text" name="nom">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                        <div class="adresse">
                            <div>
                                <label>Adresse: *</label>
                            </div>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                        <div>
                            <div>
                                <label>Code postal: *</label>
                            </div>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                        <div>
                            <div>
                                <label>Ville: *</label>
                            </div>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                        <div>
                            <div>
                                <label>Pays: </label>
                            </div>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                        <div>
                            <div>
                                <label>Tél. mobile :</label>
                            </div>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                    </div>
                </div>
                <!--paiement--------------------------------->
                <div class="paiement clearfix">
                    <div>
                        <h4>3- Paiement</h4>
                        <div class="paiement-logos">
                            <figure>
                                <img src="public/images/img-layout/196561.png">
                            </figure>
                            <!--fin de structure----------------->
                            <figure>
                                <img src="public/images/img-layout/196566.png">
                            </figure>
                            <!--fin de structure----------------->
                            <figure>
                                <img src="public/images/img-layout/196578.png">
                            </figure>
                            <!--fin de structure----------------->
                        </div>
                    </div>
                    <div class="paiement-formulaire">
                        <div>
                            <div>
                                <label>Numéro de carte de crédit :</label>
                            </div>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                        <div>
                            <div>
                                <label>Date d'expiration :</label>
                            </div>
                            <div>
                                <input type="date">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                        <div>
                            <div>
                                <label>Numéro de vérification :</label>
                            </div>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <!--fin de structure----------------->
                    </div>
                </div>
                <div class="conditions-generales">
                    <input type="checkbox">
                    <label>Je reconnais avoir pris connaissance des conditions générales d'utilisation et de vente, et je les accepte.</label>
                </div>
                <div class="je-mabonne-bouton">
                    <input type="submit" value="Je m'abonne">
                </div>
            </form>
        </div>
    </div>
</div>