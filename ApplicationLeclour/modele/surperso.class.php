<?php
require_once "connection.class.php";

class Surperso {

	// //////////////////////////////
	// Permet de modifier un usager dans la base
	// //////////////////////////////

	public static function insererSurperso($array) {
		$conn = Connection::get ();

		var_dump($array);
		// requete d'insertion
		$request = $conn->prepare ( "INSERT INTO sur_perso (nom_beneficiaire, prenom_beneficiaire, evenement, nom_entp, id_carte)
				VALUES (:nom , :prenom , :evenement, :entreprise, 1)" );
		$request->execute($array);


	}
}