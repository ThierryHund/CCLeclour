ahah<?php 
require_once "connection.class.php";

/**
* Yeah ! Tentative !!
*Sans dec, je vais en chier.
*/

function validationDate($date_deb, $date_fin)
{
	$conn = Connection::get ();

		// requete sql preparé
	$result = $conn->prepare ( "SELECT * FROM tarif_transaction WHERE date_deb >= :date_deb AND date_fin <= :date_fin");

	echo var_dump($result);

	//TH : je fixe la date de fin car le menu deroulant ne permet pas de mettre 2015 (rien touché d'autre)
		//$date_fin="2015-12-31";

	$result->execute ( array (
		'date_deb' => $date_deb,
		'date_fin' => $date_fin
		));
	$true = null;
	while ( $row = $result->fetch () ) {
		$true [] = $row;
	}
	//TH  :et hop ici $true prend bien la bonne valeur (6 avec la base de max)
	echo("tadaaaaaaaaaa!");
		echo var_dump($true); // Long story short, ça marche pas

		//$fakeresult = null; // array(2,2);
		//echo var_dump($fakeresult);

	if ($true != null) { // Ce test ne sert à rien s un resultat vide renvoit effectivement un null
		return $true;
	}else{
		return null;
	}
}

function desossage($tab) // recupère moult info dans le résultat de la requete.
{
	$date_deb ="tg noob";
	$cptPeriode=0;
	$tabIndex = array();
	foreach ($tab as $key => $value) { // compte le nombre de periode
		if ($value['date_deb'] != $date_deb) { // si la date est la même que dans la value précedente.
			$tabIndex[$cptPeriode] = $key; // nouvelle période à l'index key
			$cptPeriode ++;
			$date_deb = $value['date_deb'];
			echo var_dump($tabIndex);
		}
	}
	for ($i=0; $i < $cptPeriode ; $i++) { //Construction !!
		$periode = new controleTransaction();
		$couverture = $tabIndex[$i];
		$periode->setPeriode($tab[$couverture]['date_deb'], $tab[$couverture]['date_fin']);
		$periode->setNombrePlage($tab[$couverture]['date_deb'], $tab);
		$periode->setTableau($tab, $tab[$couverture]['date_deb']);
		echo var_dump($periode);
	}
}

class controleTransaction
{
	private $date_deb; // Normement une String. OUI, je continue de typer mes variables. Rien à foutre
	private $date_fin; // idem
	private $nombrePlage;
	private $tableau;
	private $periode;


	function __construct() //($date_deb, $date_fin)
	{
		echo var_dump("Créatiiooon !!");
	}

	

	public function setPeriode($date_deb, $date_fin) // Fait une jolie String. Peut être améliorée.
	{
		$debut = explode("-", $date_deb);
		$fin= explode("-", $date_fin);
		$this->periode = "$debut[2]/$debut[1]/$debut[0] au $fin[2]/$fin[1]/$fin[0]";
	}

	public function setNombrePlage($date_deb, $tab) //Fait ce que ça dit
	{
		$cptPlage=0;
		foreach ($tab as $value) {
			if ($value['date_deb'] == $date_deb) {
				$cptPlage++;
			}
		}
		$this->nombrePlage = $cptPlage;
	}

	public function setTableau($tab, $date_deb) // formate le tableau de donnée.
	{
		$tableau = array();
		$cpt = 0;
		foreach ($tab as $value) {
			if ($value['date_deb'] == $date_deb) {
				$tableau[$cpt] = [
				'tarif' => $cpt+1,
				'prix' => $value['prix']];
				$cpt++;
			}
		}
		$this->tableau = $tableau;
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