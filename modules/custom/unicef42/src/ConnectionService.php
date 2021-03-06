<?php

/**
 * @file
 * Contains \Drupal\unicef42\ConnectionService.
 */

namespace Drupal\unicef42;

use PDO;

/**
 * Class ConnectionService.
 *
 * @package Drupal\unicef42
 */
class ConnectionService implements ConnectionServiceInterface {
  /*
     * private static $compteur = 0;
     * Suite a un probleme d'undefined variable , et en typan le compteur. "Parse Error: syntax error, unexpected 'int' (T_STRING), expecting variable (T_VARIABLE) "
     */
    /* Attribut de l'objet Bdd */
    private $host;
    private $name;
    private $login;
    private $mdp;

	/* Le contructeur 
	 * contrairement a mon autre projet, je n'arrive pas a faire passer ces parametres (<3 symfony) sauf erreur de ma part biensur.
	 * Donc pour changer les parametre de conncetion a la base de donnée c'est ici ^^ enfin dans le constructeur.
	 * Ceci peut être donc amélioré.
	 */

	public function __construct(){
	       $this->host='localhost'; //exemple : localhost 
	       $this->name='moduleunicef';
	       $this->login='root';
	       $this->mdp='root';
	       //$this->id=$compteur++;
	    }
	/* La méthode connection, comme elle est aussi implicite, permet de se connecter a la base de donnée */
	public function connection(){

		$bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->name.';charset=utf8', $this->login , $this->mdp);
		return $bdd;
	}
	/*Requette non préparé*/
	public function annee(){

		$laBdd = $this->connection();
		$reponse = $laBdd->query("SELECT * FROM `AnneeCivil`");
		return $reponse;

	}
	/*Passage avec un parametre pour faire une requette préparé*/
	public function listetestActionSolidaire($parametre){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT '.$parametre.' FROM `ActionsSolidaires`');
		return $reponse;

	}
	public function listeActionSolidaire(){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT nom FROM `ActionsSolidaires`');
		return $reponse;

	}
	public function listeSport(){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT nomSport FROM Sport');
		return $reponse;

	}
	public function listeManifSport($lesport){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT NomManifSportive FROM ManifSportif, Sport WHERE Sport_idSport = idSport AND nomSport = "'.$lesport.'";');
		return $reponse;

	}
	public function listeImgManifSport($laManif){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT refLien,commentaire FROM Images,ManifSportif WHERE idManifSportif=ManifSportif_idManifSportif AND NomManifSportive = "'.$laManif.'"');
		return $reponse;

	}
	public function listeAnneeActionsSolidaires($lactionSolidaire){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT AnneeCivil_Annee FROM Images, ActionsSolidaires WHERE idActionsSolidaires = ActionsSolidaires_idActionsSolidaires
		AND nom = "'.$lactionSolidaire.'" GROUP BY AnneeCivil_Annee');
		return $reponse;

	}
	public function listeImagesActionsSolidaires($lactionSolidaire, $lannee){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT refLien,commentaire FROM Images, ActionsSolidaires WHERE ActionsSolidaires_idActionsSolidaires = idActionsSolidaires AND nom = "'.$lactionSolidaire.'" AND AnneeCivil_Annee = "'.$lannee.'" ');
		return $reponse;

	}
	public function listeSecteur(){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT * FROM Secteurs');
		return $reponse;

	}
	public function listeCentresSociaux($secteur){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT `nomStructure` FROM `CategorieStructure`, `StructureEducative`,`Secteurs` WHERE idCatS = CategorieStructure_idCatS AND idSecteur=Secteurs_idSecteur AND nomCatS = "Centre Sociaux" AND nomSecteur = "'.$secteur.'" ');
		return $reponse;

	}
	public function listeAnneeCentresSociaux($centresocial){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT AnneeCivil_Annee FROM Images, StructureEducative WHERE idStructure = StructureEducative_idStructure AND nomStructure = "'.$centresocial.'" GROUP BY AnneeCivil_Annee');
		return $reponse;

	}
	public function listeClubsJeunes($secteur){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT nomEngagementJeune FROM CategorieEngagement, EngagementJeune, Secteurs WHERE idCatE = CategorieEngagement_idCatE AND idSecteur = Secteurs_idSecteur AND nomCatE = "Club Jeune" AND nomSecteur = "'.$secteur.'"');
		return $reponse;

	}
	public function listeAnneeClubsJeunes($club){
		
		$laBdd = $this->connection();
		$reponse = $laBdd->query('SELECT AnneeCivil_Annee FROM Images, EngagementJeune WHERE idEngagementJeune = EngagementJeune_idEngagementJeune AND nomEngagementJeune = "'.$club.'" GROUP BY AnneeCivil_Annee');
		return $reponse;

	}

}
