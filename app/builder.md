CORE :
	- SETUP : 
		nom de la db, connexion (aller dans app/core/setup)
	- SESSION : 
		classe prise sur le manuel php


SECURITY : 
	classe static => sécurité
		!!! prévoir htmlentities !!!


BUILDER :

commencer par ces lignes en php :

	use App\Model\Queries\Builder;
	use App\Core\Setup;
	
	require_once "vendor/autoload.php";



fonctionnement : 

	instancier :

	$build = new Builder(table, connexion);

		Connexion est de base celle dans APP/CORE/SETUP


	Méthodes :

	->get();
		permet d'envoyer la requête créée
		chaque suite de méthodes se finit par ->get() pour être exécutée

	->select(colonnes (à la suite))
		->alias(après une colonne pour récupérer son nom dans un alias)
		->where(valeur, colonne, opérateur)
		
		->getFirst();
		->getLast();
			Si rien n'est spécifié => SELECT *
			Sinon, possibilité de préciser les colonnes

	->delete(int)
		l'id à péter

	->update(array)
		colonne => nouvelle valeur
		colonne => nouvelle	valeur
		...

	->insert(array)
		colonne => valeur
		colonne => valeur


	->join(table, type = left)	
		Doit être suivi par ON

	->on(table de l'instance, table joined, opérateur (= de base))

		Normalement possibilité de multiplier les joins à l'infini


	->count();
		$build->count()->get();  envoie SELECT COUNT(*) FROM table


	->limit(int);
	->offset(int);





