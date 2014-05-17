<?php
require_once "connection.class.php";
class Commande {
	private $id_com;
	private $id_typ_com;
	private $date_com;
	private $heure_com;
	private $id_utilisateur;
	public function __construct($id_com, $id_type_com, $date_com, $heure_com, $id_utilisateur) {
		$this->id_com = $id_com;
		$this->id_type_com = $id_type_com;
		$this->date_com = $date_com;
		$this->heure_com = $heure_com;
		$this->id_utilisateur = $id_utilisateur;
	}
	
	// //////////////////////////////
	// retourne les commandes grâce au type de commande
	// //////////////////////////////
	public static function rechercheIdCarte($type_com) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_com, lib_type_commande, date_com, heure_com, id_utilisateur FROM commande, type_commande WHERE id_typ_com=:id_typ_com" );
		$request->execute ( array (
				'id_typ_com' => $type_com 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		foreach ( $result as $index => $ligne ) {
			$commandes [$index] = new Commande ( $result [$index] ['id_com'], $result [$index] ['lib_typ_com'], $result [$index] ['date_com'], $result [$index] ['heure_com'], $result [$index] ['id_utilisateur'] );
		}
		
		return $commandes;
	}
	
	// Tous les getters
	public function getIdCom() {
		return $this->id_com;
	}
	public function getIdTypCom() {
		return $this->id_typ_com;
	}
	public function getDateCom() {
		return $this->date_com;
	}
	public function getHeureCom() {
		return $this->heure_com;
	}
	public function getIdUtilisateur() {
		return $this->id_utilisateur;
	}
}
