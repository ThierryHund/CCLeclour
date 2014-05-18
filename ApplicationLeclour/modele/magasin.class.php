<?php
require_once "connection.class.php";
class Magasin {
	private $id_mag;
	private $ville_mag;
	private $ad_mag;
	private $lib_mag;
	public function __construct($id_mag, $ville_mag, $ad_mag, $lib_mag) {
		$this->id_mag = $id_mag;
		$this->ville_mag = $ville_mag;
		$this->ad_mag = $ad_mag;
		$this->lib_mag = $lib_mag;
	}
	
	// //////////////////////////////
	// retourne l'id du magasin
	// //////////////////////////////
	public function getIdMag() {
		return $id_mag;
	}
	
	// //////////////////////////////
	// retourne la ville du magasin
	// //////////////////////////////
	public function getLibMag() {
		return $lib_mag;
	}
	
	// //////////////////////////////
	// retourne un tableau des magasins
	// //////////////////////////////
	public static function getMagasins() {
		$conn = Connection::get ();
		
		$select = $conn->query ( "SELECT id_mag, lib_mag FROM entite" );
		$result = array ();
		
		while ( $row = $select->fetch () ) {
			$result [] = $row;
		}
		
		foreach ( $result as $value ) {
			$return [] = array (
					$value ['id_mag'],
					$value ['lib_mag'] 
			);
		}
		
		return $return;
	}
	
	// //////////////////////////////
	// retourne un Magasin
	// //////////////////////////////
	public static function get($id_mag) {
		
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_mag, ville_mag, ad_mag FROM magasin WHERE id_mag=:id_mag" );
		$request->execute ( array (
				'id_mag' => $id_mag 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return new Magasin ( $result [0] ['id_mag'], $result [0] ['ville_mag'], $result [0] ['ad_mag'] );
	}
	public static function getLibById($id_mag) {
		$conn = Connection::get ();
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT lib_mag FROM magasin WHERE id_mag=:id_mag" );
		$request->execute ( array (
				'id_mag' => $id_mag 
		) );
		$result = null;
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		return $result;
	}
}
