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
	public static function creer($id_utilisateur, $lib_theme, $montant, $quantite, $date, $heure, $taille_array) {
		$conn = Connection::get ();
		/*if($quantite >= 1000){		   
?>				<script language="Javascript">
					confirm ("Le lot" .$lib_theme ." est supérieure à 1000 cartes. Voulez-vous continuer?" );
				</script>';
<?php 	}*/
		
			// requete pour obtenir id_type_carte à partir de lib_theme et montant
		$req1 = $conn->prepare("SELECT id_type_carte FROM type_carte WHERE lib_theme =:lib_theme AND montant =:montant");
		$req1->execute ( array ('lib_theme' => $lib_theme, 'montant' => $montant) );
		
		$id_type_carte = $req1->fetch();
		$id_type_carte = $id_type_carte['id_type_carte'];
		
		echo var_dump($taille_array);
		echo var_dump($id_type_carte);		
		echo var_dump($lib_theme);
		echo var_dump($montant);
		echo var_dump($quantite);
		echo var_dump($id_utilisateur);
		echo var_dump($date);
		echo var_dump($heure);
	
		
			// requete d'insertion table commande
		$req2 = $conn->prepare ( "INSERT INTO commande (date_com, heure_com, id_utilisateur, id_type_com) 
											VALUES (:date_com, :heure_com, :id_utilisateur , 2 )");
		$req2->execute ( array ('date_com' => $date, 
								'heure_com' => $heure, 
								'id_utilisateur' => $id_utilisateur, 
								) );
		
			// requete d'insertion table ligne_com
		$com = $conn->query("SELECT max(last_insert_id(id_com)) as last_com FROM commande");
		$id_com = $com->fetch();
		echo var_dump($id_com['last_com']);
		
		$req3 = $conn->prepare ( "INSERT INTO ligne_com (quantite, id_com, id_type_carte) VALUES (:quantite, :id_com, :id_type_carte)" );	
		$req3->execute ( array ('quantite' => $quantite, 
								'id_com' => $id_com['last_com'],
								'id_type_carte' => $id_type_carte) );
		
	}
	
	// //////////////////////////////
	// retourne les commandes grâce au type de commande
	// //////////////////////////////
	public static function rechercheIdCarte($type_com) {
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_com, lib_type_com, date_com, heure_com, id_utilisateur FROM commande, type_commande WHERE id_type_com=:id_type_com" );
		$request->execute ( array (
				'id_type_com' => $type_com 
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

  }
  
	// //////////////////////////////
	// retourne le lib_thème
	// //////////////////////////////
	public static function getThemes() {
		$conn = Connection::get ();
		
		$select = $conn->query ( "SELECT distinct lib_theme FROM type_carte" );
		
		while ( $row = $select->fetch () ) {
			$result [] = $row;
		}
		
		foreach ( $result as $value ) {
			$return []= array($value['lib_theme']);

		}			 
		//echo var_dump($return);
		return $return;
		
	}
	
	// //////////////////////////////
	// retourne les montants proposés pour les type de cartes
	// //////////////////////////////
	public static function getMontant() {
		$conn = Connection::get ();
		
		$select = $conn->query ( "SELECT distinct montant FROM type_carte" );
		
		while ( $row = $select->fetch () ) {
			$result [] = $row;
		}
		
		foreach ( $result as $value ) {
			$return []= array($value ['montant']);
			
		}
		//echo var_dump($return);
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