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
	
	public static function contratConcerne($dateDeb, $dateFin){
		$conn = Connection::get();
		
		$select = $conn->query("SELECT id_tarif, prix, date_deb, date_fin, nbcarte_max, nbcarte_min FROM tarif_transaction WHERE ((DATEDIFF(date_fin, '".$dateDeb."') >=0) AND (DATEDIFF(date_fin, '".$dateFin."') <=0) )OR ((DATEDIFF(date_deb, '".$dateFin."') <=0) AND (DATEDIFF(date_fin, '".$dateDeb."') >=0) ) ORDER BY date_deb ASC");
		$result = array();
		
		while ( $row = $select->fetch() ) {
			$result[] = $row;
		}
		return $result;
	}
	
	public static function decoupeContrat($tabContrat){
		$resultat = array();
		$i=0;
		foreach($tabContrat as $key=>$value){
			if($key==0){
				$resultat[$i][] = $tabContrat[0];
			}
			else {
				if($tabContrat[$key-1][2] == $tabContrat[$key][2]){
					$resultat[$i][] = $tabContrat[$key];
				}
				else{
					$i++;
					$resultat[$i][] = $tabContrat[$key];
				}
			}
		}
		return $resultat;
	}
	
	public static function calculPrix($tarifPeriode, $nbTransac){
		$resultat = 0;
		foreach($tarifPeriode as $key=>$value){
			
			if($nbTransac - $tarifPeriode[$key][4] > 0){
				$resultat = $resultat + $tarifPeriode[$key][4]*$tarifPeriode[$key][1];
				$nbTransac = $nbTransac - $tarifPeriode[$key][4];
			}
			else {
				$resultat = $resultat + $nbTransac*$tarifPeriode[$key][1];
			}
			if($tarifPeriode[$key][4] == NULL ){
				$resultat = $resultat + $nbTransac*$tarifPeriode[$key][1];
			}
		}
		
		return $resultat;
	}
		
	}	