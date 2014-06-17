
<?php
require_once "connection.class.php";
class Utilisateurs {
	private $nom;
	private $prenom;
	private $id;
	private $login;
	private $password;
	private $statut;
	private $groupe;
	private $id_mag;
	public function __construct($nom, $prenom, $id, $login, $password, $statut, $groupe, $id_mag) {
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->id = $id;
		$this->login = $login;
		$this->password = $password;
		$this->statut = $statut;
		$this->groupe = $groupe;
		$this->id_mag = $id_mag;
	}
	
	// //////////////////////////////
	// verifie si login existe deja
	// //////////////////////////////
	public static function verifLogin($login) {
		$conn = Connection::get ();
		$existe = false;
		
		$select = $conn->query ( "SELECT login FROM utilisateur" );
		$result = array ();
		
		while ( $row = $select->fetch () ) {
			$result [] = $row;
		}
		foreach ( $result as $param ) {
			if ($param [0] == $login)
				$existe = true;
		}
		
		return $existe;
	}
	
	// //////////////////////////////
	// Permet de créer un usager dans la base
	// //////////////////////////////
	public static function creer($nom, $prenom, $login, $password, $groupe, $id_mag) {
		$conn = Connection::get ();
		
		if (self::verifLogin ( $login )) {
			throw new Exception ( "login existant" );
		} else {
			$login = str_replace ( " ", " ", trim ( $login ) );
		}
		
		if (! preg_match ( "/^[A-Z][a-z]*[ [a-z]*]*$/", $nom )) {
			throw new Exception ( "nom incorrect" );
		} else {
			$nom = str_replace ( " ", " ", trim ( $nom ) );
		}
		;
		if (! preg_match ( "/^[A-Z][a-z]*[ [a-z]*]*$/", $prenom )) {
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
	
	// //////////////////////////////
	// Permet de modifier un usager dans la base
	// //////////////////////////////
	public static function modifie($nom, $prenom, $login, $vieux_login, $password, $statut, $groupe, $id_mag) {
		$conn = Connection::get ();
		
		if ($login != $vieux_login) {
			if (self::verifLogin ( $login )) {
				
				
				throw new Exception ( "login existant" );
			} 
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
			$nom = str_replace ( " ", " ", trim ( $nom ) );
		}
		;
		
		if (! ctype_alnum ( $login ) || (strlen ( $login ) < 4 || strlen ( $login ) > 16)) {
			throw new Exception ( "login non conforme" );
		} else {
			$login = str_replace ( " ", " ", trim ( $login ) );
		}
		;
		
		if (! preg_match ( "/^.{8,25}$/", $password )) {
			if($password!=""){
			throw new Exception ( "Password non conforme" );}
		}
		;
		
		// if($groupe!=("caisse" || "comptable" || "secours" || "administrateur")) { throw new Exception("groupe incorrect"); }
		
		// requete d'insertion
		$request = $conn->prepare ( "UPDATE utilisateur SET nom = :nom, prenom = :prenom, login = :login , mdp = :mdp, statut = :statut, id_profil = :groupe, id_mag = :magasin WHERE login = :vieux_login" );
		$request->execute ( array (
				'nom' => $nom,
				'prenom' => $prenom,
				'login' => $login,
				'vieux_login' => $vieux_login,
				'mdp' => crypt ( $password ),
				'statut' => $statut,
				'groupe' => $groupe,
				'magasin' => $id_mag 
		) );
	}
	
	// //////////////////////////////
	// retourne un tableau d'usager
	// //////////////////////////////
	public static function getUtilisateurs() {
		$conn = Connection::get ();
		
		$select = $conn->query ( "SELECT id_utilisateur,login, mdp, nom, prenom, prem_connex, id_profil, id_mag FROM utilisateur" );
		$result = array ();
		
		while ( $row = $select->fetch () ) {
			$result [] = $row;
		}
		
		return $result;
	}
	
	// //////////////////////////////
	// retourne un tableau d'usager selon les criteres en parametre
	// //////////////////////////////
	public static function getUtilisateursBy($nom, $prenom, $login, $lib_mag, $lib_profil) {
		$save;
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
		if (isset ( $lib_mag ) && $lib_mag != "") {
			$adLib_mag = " AND lib_mag = :lib_mag";
			$save ['lib_mag'] = $lib_mag;
		} else
			$adLib_mag = "";
		if (isset ( $lib_profil ) && $lib_profil != "") {
			$adLib_profil = " AND lib_profil = :lib_profil";
			$save ['lib_profil'] = $lib_profil;
		} else
			$adLib_profil = "";
		
		$conn = Connection::get ();
		
		$request = $conn->prepare ( "SELECT  nom, prenom,login, lib_mag, lib_profil FROM utilisateur, groupe, entite WHERE utilisateur.id_profil = groupe.id_profil AND utilisateur.id_mag = entite.id_mag" . $adNom . $adPrenom . $adLogin . $adLib_mag . $adLib_profil );
		$request->execute ( $save );
		
		$result = null;
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return $result;
	}
	
	// //////////////////////////////
	// retourne un usager
	// //////////////////////////////
	public static function get($login) {
		
		// verification a faire
		$conn = Connection::get ();
		$result = null;
		
		// requete sql preparé
		$request = $conn->prepare ( "SELECT id_utilisateur, login, mdp, nom, prenom ,statut,lib_profil, entite.id_mag FROM utilisateur, groupe, entite WHERE login=:login AND utilisateur.id_profil=groupe.id_profil AND utilisateur.id_mag=entite.id_mag" );
		$request->execute ( array (
				'login' => $login 
		) );
		
		while ( $row = $request->fetch () ) {
			$result [] = $row;
		}
		
		return new Utilisateurs ( $result [0] ['nom'], $result [0] ['prenom'], $result [0] ['id_utilisateur'], $result [0] ['login'], $result [0] ['mdp'], $result [0] ['statut'], $result [0] ['lib_profil'], $result [0] ['id_mag'] );
		
		// return $result[0][0];
	}
	// //////////////////////////////
	// retourne id
	// //////////////////////////////
	public function getId() {
		return $this->id;
	}
	
	// //////////////////////////////
	// retourne nom
	// //////////////////////////////
	public function getNom() {
		return $this->nom;
	}
	
	// //////////////////////////////
	// retourne prenom
	// //////////////////////////////
	public function getPrenom() {
		return $this->prenom;
	}
	
	// //////////////////////////////
	// retourne login
	// //////////////////////////////
	public function getLogin() {
		return $this->login;
	}
	
	// //////////////////////////////
	// retourne mot de passe
	// //////////////////////////////
	public function getPassword() {
		return $this->password;
	}
	
	// //////////////////////////////
	// retourne le groupe
	// //////////////////////////////
	public function getGroupe() {
		return $this->groupe;
	}
	
	// //////////////////////////////
	// retourne le statut
	// //////////////////////////////
	public function getstatut() {
		return $this->statut;
	}
	
	// //////////////////////////////
	// retourne le id magasin
	// //////////////////////////////
	public function getIdMag() {
		return $this->id_mag;
	}
}
