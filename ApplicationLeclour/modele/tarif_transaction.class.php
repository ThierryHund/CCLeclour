<?php
require_once "connection.class.php";
class TarifTransaction {
	private $id_tarif;
	private $prix;
	private $date_deb;
	private $date_fin;
	private $nbcarte_max;
	private $nbcarte_min;
	public function __construct($id_tarif, $prix, $date_deb, $date_fin, $nbcarte_max, $nbcarte_min) {
		$this->id_tarif = $id_tarif;
		$this->prix = $prix;
		$this->date_deb = $date_deb;
		$this->date_fin = $date_fin;
		$this->nbcarte_max = $nbcarte_max;
		$this->nbcarte_min = $nbcarte_min;
	}
	
		
	// Getters
	public function getIdTarif() {
		return $this->id_tarif;
		//test
	}
	public function getPrix() {
		return $this->prix;
	}
	public function getDateDebut() {
		return $this->date_deb;
	}
	public function getDateFin() {
		return $this->date_fin;
	}
	public function getNbCarteMax() {
		return $this->nbcarte_max;
	}
	public function getNbCarteMin() {
		return $this->nbcarte_min;
	}



	
	
	//Création d'un tarif :
	public static function creer($prix, $date_deb, $date_fin, $nbcarte_max, $nbcarte_min){
		$conn = Connection::get ();
		if($nbcarte_max == 'x') $nbcarte_max = NULL;
		$request = $conn->prepare ( "INSERT INTO tarif_transaction (id_tarif, prix, date_deb, date_fin, nbcarte_max, nbcarte_min) VALUES (:id_tarif, :prix, :date_deb, :date_fin, :nbcarte_max, :nbcarte_min)" );
		$request->execute ( array (
				'id_tarif' => "",
				'prix' => $prix,
				'date_deb' => $date_deb,
				'date_fin' => $date_fin,
				'nbcarte_max' => $nbcarte_max,
				'nbcarte_min' => $nbcarte_min 
		) );
	}
	
	public static function creer2($prix, $date_deb, $date_fin, $nbcarte_max, $nbcarte_min) {
		$addtarif = TarifTransaction::get ();		
		if (! preg_match ( "/^[0-9]*$/", $prix )) {
			throw new Exception ( "prix incorrect" );
		} else {
			$prix = str_replace ( " ", " ", trim ( $prix ) );
		}
		;
		if (! preg_match ( "/^[0-9]*$/", $date_deb )) {
			throw new Exception ( "date incorrecte" );
			}
			else if (date_deb>=date_fin) {
			throw new Exception ( "La date de début ne peut être supérieure à la date de fin" );
			}
		
		else {
			$date_deb = str_replace ( " ", " ", trim ( $date_deb ) );
		}
		;
		if (! preg_match ( "/^[0-9]*$/", $date_fin )) {
			throw new Exception ( "date incorrecte" );
			}
		else if (date_fin<=date_deb){
			
			throw new Exception ( "La date de fin ne peut être inférieure à la date de début" );
			}
		
		else {
			$date_fin = str_replace ( " ", " ", trim ( $date_fin ) );
		}
		;
		
		if (! preg_match ( "/^[0-9]*$/", $nbcarte_min )) {
			throw new Exception ( "nombre incorrecte" );
			}
			else if (nbcarte_min>=nbcarte_max){
			
			throw new Exception ( "Le nombre maximum de cartes ne peut être inférieur au nombre minimum" );
			}
		
		else {
			$nbcarte_min = str_replace ( " ", " ", trim ( $nbcarte_min ) );
		}
		;
		
		if (! preg_match ( "/^[0-9]*$/", $nbcarte_max )) {
			throw new Exception ( "nombre incorrecte" );
			}
			else if (nbcarte_max<=nbcarte_min){
			
			throw new Exception ( "Le nombre minimum de cartes ne peut être supérieur au nombre maximum" );
			}
		
		else {
			$nbcarte_max = str_replace ( " ", " ", trim ( $nbcarte_max ) );
		}
		;

		
		// Ajout du tarif dans la BDD 
		$request = $addtarif->prepare ( "UPDATE tarif_transaction SET prix = :prix, date_deb = :date_deb, date_fin = :date_fin , nbcarte_max = :nbcarte_max, nbcarte_min = :nbcarte_min WHERE id_tarif = :null" );
		$request->execute ( array (
				'prix' => $prix,
				'date_deb' => $date_deb,
				'date_fin' => $date_fin,
				'nbcarte_max' => $nbcarte_max,
				'nbcarte_min' => $nbcarte_min,
				
		) );
	}
		
	}	