<h1>Intégrer</h1>
<b>Voici quelques informations importantes pour intégrer des nouvelles pages</b>
<ul>
    <li>Les fichiers des pages ont été créés vous n'avez plus qu'à les modifiers</li>
    <li>Pas besoin d'écrire ni le header ni le footer, ils sont déjà intégrés, pareil pour la balise head et body</li>
    <li>Pour accéder à une page, ne la chargez pas directement, utilisé les liens <b>index.php?action=NomDeLaPage</b> où NomDeLaPage correspond aux actions juste en dessous</li>
    <li>C'est pareil pour les liens, quand vous renseignez un href, utilisé toujours les lien index.php?action=...</li>
    <li>On utilise un seul fichier css, le style.css dans public/css</li>
    <li>Tous les liens vers des images où fichiers s'écrivent en partant du principe que l'on se trouve dans index.php (donc directement public/images et pas ../public/images)</li>
    <li>Pour accéder aux variables php que l'on transmet aux pages il faut écricre : <b>$data["cont"]["NomDeLaVariable"]</b> les noms des variables sont renseignées juste en dessous</li>
    <li>NE JAMAIS TRAVAILLER SUR LE MASTER DIRECTEMENT</li>
</ul>

<h1>Variables transmises aux pages</h1>
<h3>home.php</h3>
<ul>
    <li><b>Nom</b> : journals, <b>Info</b> : c'est un tableau contenant 4 objects, les 4 dernières revues. Ces objects ont 3 paramètres : id, region et img (img contient juste le nom du fichier, pas le chemin complet)<br><b>Exemple d'utilisation : </b>foreach( $data["cont"]["journals"] as $journal ) {
    echo($journal->getRegion()); }</li>
    <li><b>Nom</b> : news, <b>Infos</b> : c'est un tableau contenant 4 objects, les 4 dernières news. Ces objects ont 4 paramètres : id, title, architect, img (img est un tableau à 1 dimension contenant les noms des fichiers image)</li>
</ul>

<h3>listNews.php</h3>
<ul>
    <li><b>Nom</b> : news, <b>Infos</b> : c'est un tableau contenant pleins d'objects, toutes les news. Ces objects ont 5 paramètres : id, date, architect, title, img (img est un tableau à 1 dimension contenant les noms des fichiers image)</li>
</ul>

<h3>newsView.php</h3>
<ul>
    <li><b>Nom</b> : news, <b>Infos</b> : c'est un seul et unique object, l'object de la news désirée. Cet object a 11 paramètres : id, date, architect, departement, city, type, title, description, infos, partners, img (img est un tableau à 1 dimension contenant les noms des fichiers image)</li>
</ul>

<h3>listJournals</h3>
<ul>
    <li><b>Nom</b> : journals, <b>Infos</b> : c'est un tableau contenant pleins objects, toutes les revues de magazine. Ces objects ont 6 paramètres : id, number, img, pdf, region et year</li>
</ul>

<h3>journalView</h3>
<ul>
    <li><b>Nom</b> : journal, <b>Infos</b> : c'est un seul et unique object, l'object de la revue désirée. Cet object a 7 paramètres : id, number, img, pdf, region, year et partners</li>
</ul>

<h1>Routes</h1>
<ul>
	<li><b>[ACTION] -> [CONTROLLER] -> <i>(infos)</i></b></li><br>
	<li><b>Home</b> -> Main -> <i>(page d'accueil)</i></li>
	<li><b>Tender</b> -> Main -> <i>(appel d'offre)</i></li>
	<li><b>ListNews</b> -> Main -> <i>(liste des actualités)</i></li>
	<li><b>newsView</b> -> Main -> <i>(page d'une actualité)</i></li>
	<li><b>ListJournals</b> -> Journal -> <i>(liste des magazines)</i></li>
	<li><b>JournalView</b> -> Journal -> <i>(page d'une revue de magazine)</i></li>
	<li><b>Order</b> -> Order -> <i>(page de commande)</i></li>
	<li><b>Subscribe</b> -> Order -> <i>(page d'abonnement)</i></li>
	<li><b>Validation</b> -> Order -> <i>(page de validation d'abonnement)</i></li>
</ul>

<h1>Plan du site</h1>

<h3>Accueil</h3>
<ul>
	<li>Présentation de la société</li>
	<li>Présentation du concept du magazine</li>
	<li>Dernières parutions (plus à jour sur le site actuel)</li>
	<li>Fil d’actualité lié à l’architecture + lien vers l’article sur le site</li>
</ul>
	
<h3>Nos revues / Dernières parutions</h3>
<ul>
	<li>Les seizes dernières parutions avec titre + couverture.</li>
	<li>Lorsque l’on clique sur un élément on arrive sur une page comprenant deux parties : 
		<ol>
			<li>- Un lien vers une partie de la revue en ligne (PDF sur Calaméo)</li>
			<li>- Liste des partenaires ayant participés à la revue, donc liés à la région traitée dans la revue.</li>
		</ol>
	</li>
</ul>
		
<h3>Commandes / Abonnement</h3>
<ul>
	<li>Formulaire de commande pour réserver un magazine.</li>
	<li>Tableau indiquant les tarifs</li>
	<li>Miniature de la revue sélectionnée.</li>
</ul>

<h3>Appel d'offre</h3>
	<p>Iframe d’un partenaire majoritaire de la société (à retrouver obligatoirement)</p>

<h3>Actualités</h3>
	<p>Tableau montrant les différents actualités du site.</p>

<h3>Contact</h3>
<ul>
	<li>Formulaire classique de contact</li>
	<li>Information sur la société</li>
</ul>
