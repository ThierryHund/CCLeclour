<?php
require_once "connection.class.php";
class Transaction {
	private $id_transac;
	private $lib_transac;
	private $date_transac;
	private $heure_transac;
	private $id_utilisateur;
	private $id_carte;
	public function __construct($id_transac, $lib_transac, $date_transac, $heure_transac, $id_utilisateur, $id_carte) {
		$this->id_transac = $id_transac;
		$this->lib_transac = $lib_transac;
		$this->date_transac = $date_transac;
		$this->heure_transac = $heure_transac;
		$this->id_utilisateur = $id_utilisateur;
		$this->id_carte = $id_carte;
	}
	
	// //////////////////////////////
	// retourne une carte grace au code barre
	// //////////////////////////////
	public static function rechercheIdCarte($numCarte) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_transac, lib_transac, date_transac, heure_transac, id_utilisateur, id_carte FROM transaction WHERE id_carte=:id_carte" );
		$request->execute ( array (
				'id_carte' => $numCarte 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		foreach ( $result as $index => $ligne ) {
			$transactions [$index] = new Transaction ( $result [$index] ['id_transac'], $result [$index] ['lib_transac'], $result [$index] ['date_transac'], $result [$index] ['heure_transac'], $result [$index] ['id_utilisateur'], $result [$index] ['id_carte'] );
		}
		
		return $transactions;
	}
	
	// Tous les getters
	public function getIdTransac() {
		return $this->id_transac;
	}
	public function getLibTransac() {
		return $this->lib_transac;
	}
	public function getDateTransac() {
		return $this->date_transac;
	}
	public function getHeureTransac() {
		return $this->heure_transac;
	}
	public function getIdUtilisateur() {
		return $this->id_utilisateur;
	}
	public function getIdCarte() {
		return $this->id_carte;
	}
	
	//creer une transaction
	public static function creer($id_transac, $lib_transac, $date_transac, $heure_transac, $id_utilisateur, $id_carte) {
		$conn = Connection::get ();
		
		if (self::verifLogin ( $login )) {
			throw new Exception ( "login existant" );
		} else {
			$login = str_replace ( " ", " ", trim ( $login ) );
		}
		
		if (! preg_match ( "/^[A-Z][a-zA-Z]*[ [a-z]*]*$/", $nom )) {
			throw new Exception ( "nom incorrect" );
		} else {
			$nom = str_replace ( " ", " ", trim ( $nom ) );
		}
		;
		if (! preg_match ( "/^[A-Z][a-zA-Z]*[ [a-z]*]*$/", $prenom )) {
			throw new Exception ( "prenom incorrect" );
		} else {
			$prenom = str_replace ( " ", " ", trim ( $prenom ) );
		}
		;
		if (! ctype_alnum ( $login ) || (strlen ( $login ) < 4 || strlen ( $login ) > 16)) {
			throw new Exception ( "login non conforme" );
		} else {
			$login = str_replace ( " ", " ", trim ( $login ) );
		}
		;
		
		if (! preg_match ( "/^.{8,25}$/", $password )) {
			throw new Exception ( "Password non conforme" );
		}
		;
		
		// if($groupe!=("caisse" || "comptable" || "secours" || "administrateur")) { throw new Exception("groupe incorrect"); }
		
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
