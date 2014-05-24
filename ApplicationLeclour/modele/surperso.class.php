<?php
require_once "connection.class.php";

class Surperso {

	// //////////////////////////////
	// Permet de modifier un usager dans la base
	// //////////////////////////////

	public static function insererSurperso($array) {
		$conn = Connection::get ();


		// requete d'insertion
		$request = $conn->prepare ( "INSERT INTO utilisateur (nom, prenom, login, mdp, prem_connex, statut, id_profil, id_mag) VALUES (:nom , :prenom , :login , :password ,:prem_connex, :statut, :groupe, :magasin)" );
		$request->execute ( array (
				'nom' => $nom,
				'prenom' => $prenom,
				'login' => $login,
				'password' => crypt ( $password ),
				'prem_connex' => 1,
				'statut' => "actif",
				'groupe' => $groupe,
				'magasin' => $id_mag

		) );
	}
}