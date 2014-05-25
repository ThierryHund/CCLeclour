<?php
require_once "connection.class.php";
class Carte {
	private $id_carte;
	private $num_Aleatoire;
	private $num_Serie;
	private $statut;
	private $solde;
	private $id_typeCarte;
	private $id_surperso;
	public function __construct($id_carte, $num_Aleatoire, $num_Serie, $statut, $solde, $id_typeCarte, $id_surperso) {
		$this->id_carte = $id_carte;
		$this->num_Aleatoire = $num_Aleatoire;
		$this->num_Serie = $num_Serie;
		$this->statut = $statut;
		$this->solde = $solde;
		$this->id_typeCarte = $id_typeCarte;
		$this->id_surperso = $id_surperso;
	}
	
	// //////////////////////////////
	// retourne une carte grace au code barre
	// //////////////////////////////
	public static function rechercheNumAleatoire($numAlea) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_carte, num_aleatoire, num_serie, solde, statut, id_type_carte, id_surperso FROM carte WHERE num_aleatoire=:num_aleatoire" );
		$request->execute ( array (
				'num_aleatoire' => $numAlea 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return new Carte ( $result [0] ['id_carte'], $result [0] ['num_aleatoire'], $result [0] ['num_serie'], $result [0] ['solde'], $result [0] ['statut'],  $result [0] ['id_type_carte'], $result [0] ['id_surperso'] );
	}
	
	// //////////////////////////////
	// retourne une carte grace au numero de serie
	// //////////////////////////////
	public static function rechercheNumSerie($numSerie) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_carte, num_aleatoire, num_serie, statut, solde, id_type_carte, id_surperso FROM carte WHERE num_serie=:num_serie" );
		$request->execute ( array (
				'num_serie' => $numSerie 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		return new Carte ( $result [0] ['id_carte'], $result [0] ['num_aleatoire'], $result [0] ['num_serie'], $result [0] ['solde'], $result [0] ['statut'], $result [0] ['id_type_carte'], $result [0] ['id_surperso'] );
	}
	
	// //////////////////////////////
	// retourne une carte grace a son ID
	// //////////////////////////////
	public static function rechercheIdCarte($numCarte) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_carte, num_aleatoire, num_serie, statut, solde, id_type_carte, id_surperso FROM carte WHERE id_carte=:id_carte" );
		$request->execute ( array (
				'id_carte' => $numCarte 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return new Carte ( $result [0] ['id_carte'], $result [0] ['num_aleatoire'], $result [0] ['num_serie'], $result [0] ['statut'], $result [0] ['solde'], $result [0] ['id_type_carte'], $result [0] ['id_surperso'] );
	}
	
	// //////////////////////////////
	// modifie la valeur de l'indice de blocage d'une carte
	// //////////////////////////////
	public static function modificationStatut($numCarte, $numStatut) {
		$conn = Connection::get ();
		$request = $conn->prepare ( "UPDATE carte SET statut = :statut WHERE id_carte = :id_carte" );
		$request->execute ( array (
				'statut' => $numStatut,
				'id_carte' => $numCarte 
		) );
	}
	
	// Retourne une chaine en fonction de l'indice de blocage de la carte
	public function affichageStatut() {
		if ($this->statut == 0) {
			return 'Carte non activée et non bloquée';
		} 
		elseif (($this->statut == 1)) {
			return 'Carte activée et non bloquée';
		}
		elseif (($this->statut == 2)) {
			return 'Carte activée et bloquée';
		}
	}
	
	// Tous les getters
	public function getIdCarte() {
		return $this->id_carte;
	}
	public function getNumAleatoire() {
		return $this->num_Aleatoire;
	}
	public function getNumSerie() {
		return $this->num_Serie;
	}
	public function getStatut() {
		return $this->statut;
	}
	public function getSolde() {
		return $this->solde;
	}
	public function getIdTypeCarte() {
		return $this->id_typeCarte;
	}
	public function getIdSurperso() {
		return $this->id_surperso;
	}
}
