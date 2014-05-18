<?php
require_once "connection.class.php";
class Carte {
	private $id_carte;
	private $num_Aleatoire;
	private $num_Serie;
	private $blocage;
	private $solde;
	private $id_typeCarte;
	private $id_surperso;
	public function __construct($id_carte, $num_Aleatoire, $num_Serie, $blocage, $solde, $id_typeCarte, $id_surperso) {
		$this->id_carte = $id_carte;
		$this->num_Aleatoire = $num_Aleatoire;
		$this->num_Serie = $num_Serie;
		$this->blocage = $blocage;
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
		
		// requete sql prepar�
		$request = $conn->prepare ( "SELECT id_carte, num_aleatoire, num_serie, blocage, solde, id_type_carte, id_surperso FROM carte WHERE num_aleatoire=:num_aleatoire" );
		$request->execute ( array (
				'num_aleatoire' => $numAlea 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return new Carte ( $result [0] ['id_carte'], $result [0] ['num_aleatoire'], $result [0] ['num_serie'], $result [0] ['blocage'], $result [0] ['solde'], $result [0] ['id_type_carte'], $result [0] ['id_surperso'] );
	}
	
	// //////////////////////////////
	// retourne une carte grace au numero de serie
	// //////////////////////////////
	public static function rechercheNumSerie($numSerie) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql prepar�
		$request = $conn->prepare ( "SELECT id_carte, num_aleatoire, num_serie, blocage, solde, id_type_carte, id_surperso FROM carte WHERE num_serie=:num_serie" );
		$request->execute ( array (
				'num_serie' => $numSerie 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return new Carte ( $result [0] ['id_carte'], $result [0] ['num_aleatoire'], $result [0] ['num_serie'], $result [0] ['blocage'], $result [0] ['solde'], $result [0] ['id_type_carte'], $result [0] ['id_surperso'] );
	}
	
	// //////////////////////////////
	// retourne une carte grace a son ID
	// //////////////////////////////
	public static function rechercheIdCarte($numCarte) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql prepar�
		$request = $conn->prepare ( "SELECT id_carte, num_aleatoire, num_serie, blocage, solde, id_type_carte, id_surperso FROM carte WHERE id_carte=:id_carte" );
		$request->execute ( array (
				'id_carte' => $numCarte 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return new Carte ( $result [0] ['id_carte'], $result [0] ['num_aleatoire'], $result [0] ['num_serie'], $result [0] ['blocage'], $result [0] ['solde'], $result [0] ['id_type_carte'], $result [0] ['id_surperso'] );
	}
	
	// //////////////////////////////
	// modifie la valeur de l'indice de blocage d'une carte
	// //////////////////////////////
	public static function modificationBlocage($numCarte, $numBlocage) {
		$conn = Connection::get ();
		$request = $conn->prepare ( "UPDATE carte SET blocage = :blocage WHERE id_carte = :id_carte" );
		$request->execute ( array (
				'blocage' => $numBlocage,
				'id_carte' => $numCarte 
		) );
	}
	
	// Retourne une chaine en fonction de l'indice de blocage de la carte
	public function affichageBlocage() {
		if ($this->blocage == 0) {
			return 'Carte non bloqu�e';
		} else {
			return 'Carte bloqu�e';
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
	public function getBlocage() {
		return $this->blocage;
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
