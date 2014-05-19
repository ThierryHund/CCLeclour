<?php
require_once "connection.class.php";

class Commande {
	private $id_com;
	private $id_type_com;
	private $lib_type_com;
	private $date_com;
	private $heure_com;
	private $id_utilisateur;
	private $nom;
	
	
	
	public function __construct($id_com, $id_type_com, $date_com, $heure_com, $id_utilisateur, $nom) {
		$this->id_com = $id_com;
		$this->id_type_com = $id_type_com;
		$this->date_com = $date_com;
		$this->heure_com = $heure_com;
		
		$this->id_utilisateur = $id_utilisateur;		
		$this->nom = $nom;
		
	}
	
	// //////////////////////////////
	// Créé une nouvelle commande composée de différents lots
	// //////////////////////////////
	public static function creer($id_client, $id_utilisateur, $id_type_com) {
		$conn = Connection::get ();
		if($quantite >= 1000){		   
?>				<script language="Javascript">
					alert ("La commande est supérieure à 1000 cartes. Voulez-vous continuer?" )
				</script>';
<?php 	}
		// requete d'insertion
		$request = $conn->prepare ( "INSERT INTO commande (id_com, id_client, date_com, heure_com, id_utilisateur, id_type_com) VALUES ('', :id_client , '', '', :id_utilisateur ,:id_type_com)" );
		$request->execute ( array (
				'id_client' => $id_client,
				'id_utilisateur' => $id_utilisateur,
				'id_type_com' => $id_type_com
		) );
	}
	
	// //////////////////////////////
	// retourne les commandes grâce au type de commande
	// //////////////////////////////
	public static function rechercheIdCarte($type_com) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_com, lib_type_com, date_com, heure_com, id_utilisateur FROM commande, type_commande WHERE id_typ_com=:id_typ_com" );
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
	
	//////////////////////////
	// Recherche d'une commande selon plusieurs paramètres
	
	public static function getCommandesBy($id_com, $date_com, $lib_type_com, $id_utilisateur, $nom) {
		
		$conn = Connection::get ();
		
		$request = $conn->prepare ( "SELECT  id_com, date_com, lib_type_com, heure_com, id_utilisateur, nom 
									FROM commande, utilisateur 
									WHERE utilisateur.id_utilisateur = commande.id_utilisateur
									AND commande.id_type_com = type_commande.id_type_com
									AND id_com = :id_com
									AND lib_type_com = :lib_type_com
									AND date_com = :date_com
									AND id_utilisateur = :id_utilisateur
									AND nom = :nom");

		$request->execute(array('id_com' => $id_com, 'date_com' => $date_com, 'lib_type_com' => $lib_type_com, 'id_utilisateur' => $id_utilisateur, 'nom' => $nom));
		
		$result = null;
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		 return $result;
		
	}
	
	// //////////////////////////////
	// retourne un tableau  de commandes
	// //////////////////////////////
  public static function getCommandes()
  {

    $conn = Connection::get();
    $request = $conn->query ("SELECT id_com, lib_type_com, date_com, heure_com, utilisateur.id_utilisateur, nom 
									FROM commande, type_commande, utilisateur 
									WHERE utilisateur.id_utilisateur = commande.id_utilisateur 
									AND commande.id_type_com = type_commande.id_type_com");
	
	
    $result = array ();
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return $result;
	return $result;

  }
	// //////////////////////////////
	// retourne le type de carte, montant, lib_thème
	// //////////////////////////////
	public static function getTheme() {
		$conn = Connection::get ();
		
		$select = $conn->query ( "SELECT id_type_carte, code_theme, lib_theme, montant FROM type_carte" );
		$result = array ();
		
		while ( $row = $select->fetch () ) {
			$result [] = $row;
		}
		
		foreach ( $result as $value ) {
			$return [] = array (
					$value ['id_type_carte'],
					$value ['code_theme'],
					$value ['lib_theme'], 
					$value ['montant'] 
			);
		}
		
		return $return;
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
	public function getNom() {
		return $this->nom;
	}
}