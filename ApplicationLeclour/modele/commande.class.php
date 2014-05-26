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
	// Création d'une nouvelle commande composée de différents lots
	// //////////////////////////////
	public static function creerCom($id_utilisateur, $date, $heure) {
		$conn = Connection::get ();
		/*if($quantite >= 1000){		   
?>				<script language="Javascript">
					confirm ("Le lot" .$lib_theme ." est supérieure à 1000 cartes. Voulez-vous continuer?" );
				</script>';
<?php 	}*/
			
		//echo var_dump("id_util: ".$id_utilisateur);
		//echo var_dump("date: ".$date);
		//echo var_dump("heure: ".$heure);
	
		
			// requete d'insertion table commande
		$req2 = $conn->prepare ( "INSERT INTO commande (date_com, heure_com, id_utilisateur, id_type_com) 
											VALUES (:date_com, :heure_com, :id_utilisateur , 2 )");
		$req2->execute ( array ('date_com' => $date, 
								'heure_com' => $heure, 
								'id_utilisateur' => $id_utilisateur, 
								) );
		
	}
	
	// //////////////////////////////
	// Création d'un nouveau lot à partir de l'id de la commande
	// //////////////////////////////
	public static function creerLot($lib_theme, $montant, $quantite, $taille_array) {
		$conn = Connection::get ();
		
			// requete pour obtenir id_type_carte à partir de lib_theme et montant
		$req1 = $conn->prepare("SELECT id_type_carte FROM type_carte WHERE lib_theme =:lib_theme AND montant =:montant");
		$req1->execute ( array ('lib_theme' => $lib_theme, 'montant' => $montant) );
		
		$id_type_carte = $req1->fetch();
		$id_type_carte = $id_type_carte['id_type_carte'];
		
	/*	echo var_dump("taille_tab: ".$taille_array);
		echo var_dump("id_type_carte: ".$id_type_carte);		
		echo var_dump("lib_theme: ".$lib_theme);
		echo var_dump("montant: ".$montant);
		echo var_dump("quantite: ".$quantite);
	*/
		
			// requete d'insertion table ligne_com
		$com = $conn->query("SELECT max(last_insert_id(id_com)) as last_com FROM commande");
		$id_com = $com->fetch();
		//echo var_dump("dernière id com insérée: ".$id_com['last_com']);
		
		$req3 = $conn->prepare ( "INSERT INTO ligne_com (quantite, id_com, id_type_carte) VALUES (:quantite, :id_com, :id_type_carte)" );	
		$req3->execute ( array ('quantite' => $quantite, 
								'id_com' => $id_com['last_com'],
								'id_type_carte' => $id_type_carte) );
		
	}
	
	// //////////////////////////////
	// retourne les commandes grâce au type de commande
	// //////////////////////////////
	public static function rechercheIdCarte($type_com) {
		
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
	
	// //////////////////////////////
	// retourne les commandes selon 1 ou plusieurs parametres
	// //////////////////////////////
	public static function getCommandesBy($id_com, $id_utilisateur, $nom, $prenom, $login, $date_com_deb, $date_com_fin) {
		$save;
		if (isset ( $id_com ) && $id_com != "") {
			$adIdCom = " AND id_com = :id_com";
			$save ['id_com'] = $id_com;
		} else
			$adIdCom = "";
		if (isset ( $id_utilisateur ) && $id_utilisateur != "") {
			$adIdUtilisateur = " AND id_utilisateur = :id_utilisateur";
			$save ['id_utilisateur'] = $id_utilisateur;
		} else
			$adIdUtilisateur = "";
		if (isset ( $nom ) && $nom != "") {
			$adNom = " AND nom = :nom";
			$save ['nom'] = $nom;
		} else
			$adNom = "";
		if (isset ( $prenom ) && $prenom != "") {
			$adPrenom = " AND prenom = :prenom";
			$save ['prenom'] = $prenom;
		} else
			$adPrenom = "";
		if (isset ( $login ) && $login != "") {
			$adLogin = " AND login = :login";
			$save ['login'] = $login;
		} else
			$adLogin = "";
		if (isset ( $date_com_deb ) && $date_com_deb != "") {
			$adDateComDeb = " AND date_com_deb = :date_com_deb";
			$save ['date_com_deb'] = $date_com_deb;
		} else
			$adDateComDeb = "";
		if (isset ( $date_com_fin ) && $date_com_fin != "") {
			$adDateComFin = " AND date_com_fin = :date_com_fin";
			$save ['date_com_fin'] = $date_com_fin;
		} else
			$adDateComFin = "";
			
		$conn = Connection::get ();
		if ( (!isset($date_com_fin) || $date_com_fin == "") || (!isset($date_com_deb) || $date_com_deb == "") ) {
			$request = $conn->prepare ( "SELECT  id_com, commande.id_utilisateur, nom, prenom, login, date_com, heure_com
									FROM commande, utilisateur
									WHERE utilisateur.id_utilisateur = commande.id_utilisateur									
									AND id_type_com = 2". $adIdCom. $adIdUtilisateur. $adNom. $adPrenom. $adLogin);
		
		}
		else {
			$request = $conn->prepare ( "SELECT  id_com, commande.id_utilisateur, nom, prenom, login, date_com, heure_com
									FROM commande, utilisateur 
									
									WHERE ((DATEDIFF(date_com, '".$date_com_deb."') >=0) 
									AND (DATEDIFF(date_com, '".$date_com_fin."') <=0) )
									AND utilisateur.id_utilisateur = commande.id_utilisateur									
									AND id_type_com = 2". $adIdCom. $adIdUtilisateur. $adNom. $adPrenom. $adLogin);
		
		}
		$request->execute($save);
		$result = array ();
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
	
	//Partie developpee le 25/05/2014
	public static function getLigneCom($id_com) {
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT quantite, id_com, ligne_com.id_type_carte, montant, lib_theme FROM ligne_com, type_carte WHERE id_com=:id_com AND type_carte.id_type_carte = ligne_com.id_type_carte" );
		$request->execute ( array (
				'id_com' => $id_com 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return $result;
	}
	
}