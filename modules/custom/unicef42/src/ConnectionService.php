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
		try
		{
			$bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->name.';charset=utf8', $this->login , $this->mdp);
			return "ok";
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		        return "pas ok";
		}
	}
	/**
	 * Les autres méthodes SQL. 
	 */

}
