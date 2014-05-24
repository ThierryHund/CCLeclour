<?php 
require_once "connection.class.php";

/**
* Yeah ! Tentative !!
*Sans dec, je vais en chier.
*/

function validationDate($date_deb, $date_fin)
{
	$conn = Connection::get ();
		
		// requete sql preparé
		$result = $conn->prepare ( "SELECT count(*) FROM tarif_transaction WHERE date_deb>= :date_deb AND date_fin<= :date_fin GROUP BY date_deb");

echo var_dump($result);

		$result->execute ( array (
				'date_deb' => $date_deb,
				'date_fin' => $date_fin
				));
		$true = null;
		while ( $row = $result->fetch () ) {
			$true [] = $row;
		}

		echo var_dump($true); // Long story short, ça marche pas

		$fakeresult = null; // array(2,2);
		echo var_dump($fakeresult);

		if ($fakeresult != null) { // Ce test ne sert à rien s un resultat vide renvoit effectivement un null
			return $fakeresult;
		}else{
			return null;
		}
}


class controleTransaction
{
	private $date_deb; // Normement une String. OUI, je continue de typer mes variables. Rien à foutre
	private $date_fin; // idem

	function __construct($date_deb, $date_fin)// alors là, pour la petite histoire, je suis bien emmerdé, parce que je ne sais pas qui va créer l'objet.
	{
		$this->date_deb = $date_deb;
		$this->date_fin = $date_fin;

		echo var_dump("Créatiiooon !!");
		//$this->nombrePlage = seekNombrePlage($date_deb, $date_fin);
	}

	// Allez, rien à battre je recommence (presque tout)
	/*
	// Putain de conneries de variables non-typées de mes fesses. 
	private $periode; // String
	private $nombrePlage; // Int
	private $table; // Array d'Array (Et ouais du coup je fais ce que je veux. Prend ca dans les dents, php.)
	private $tarif; //array
	private $prixUnitaire; //array
	private $nombreCarte; //array
	
	function __construct($date_deb, $date_fin)// alors là, pour la petite histoire, je suis bien emmerdé, parce que je ne sais pas qui va créer l'objet.
	{
		var_dump("Créatiiooon !!")
		$this->nombrePlage = seekNombrePlage($date_deb, $date_fin);
	}

	public function seekNombrePlage($date_deb, $date_fin)
	{
		$connexion = Connection::get ();
		
		// requete sql preparé
		$result = $connexion->query ( "SELECT count(*) 
											FROM tarif_transaction
											WHERE date_deb>= date_deb
											AND date_fin<= date_fin" );
		// Ici, l'auteur touche du bois. Rectification, il en mange pour que ça marche mieux.
		var_dump($result);
		return $result;
	}

	public function seekValeur($date_deb, $date_fin)
	{
		$connexion = Connection::get ();
		// requete sql preparé
		$result = $connexion->query ( "SELECT id_tarif, prix 
										FROM tarif_transaction
										WHERE date_deb>= date_deb
										AND date_fin<= date_fin" );
		//Là pareil. Du bois brut. Du chêne de préférence. Mais ça sent le sapin.
		var_dump($result);
	}


// Bon je recommence, je pense qu'il y a mieux à faire
	/*
	public function seekNombrePlage($date_deb, $date_fin)
	{
		$connexion = Connection::get ();
		
		// requete sql preparé
		$result = $connexion->query ( "SELECT count(*) 
											FROM tarif_transaction
											WHERE date_deb>= :date_deb
											AND date_fin<= :date_fin" );
		// Ici, l'auteur touche du bois. Rectification, il en mange pour que ça marche mieux.
		return $result;
	}

	public function seekTarif($nbrPlage, $date_deb, $date_fin)
	{
		$connexion = Connection::get ();
		$result = null;
		$conn = Connection::get ();
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_tarif, prix 
										FROM tarif_transaction
										WHERE date_deb>= :date_deb
										AND date_fin<= :date_fin" );
		//Là pareil. Du bois brut. Du chêne de préférence. Mais ça sent le sapin.
	}

	public function seekPrixUnitaire($nbrPlage, $date_deb, $date_fin)
	{
		$connexion = Connection::get ();
		$result = null;
		$conn = Connection::get ();
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_tarif, nbcarte_
										FROM tarif_transaction
										WHERE date_deb>= :date_deb
										AND date_fin<= :date_fin" );
		// Les tutots sur le PDO sont tellement écrits avec les pieds bordel ! Je concois difficilement que des méthodes aussi mals expliquées soient utilisées...
	}
	*/


}
 ?>