<?php
require_once "connection.class.php";
class Utilisateurs
{
  private $nom;
  private $prenom;
  private $id;
  private $login;
  private $password;
  private $statut;
  private $groupe;
  private $id_mag;
  
  public function __construct($nom, $prenom, $id, $login, $password, $statut, $groupe, $id_mag)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->id = $id;
    $this->login= $login;
	$this->password= $password;
	$this->statut= $statut;
	$this->groupe= $groupe;
	$this->id_mag= $id_mag;
  }
  
 ////////////////////////////////
 //Permet de créer un usager dans la base
 ////////////////////////////////
 
  public static function creer($nom, $prenom, $login, $password, $groupe, $magasin)
  {

    $conn = Connection::get();
	
	//verification du nom
	if(!preg_match("/^[A-Z][a-zA-Z]* [a-zA-Z]\.$/",$nom))
	{
		throw new Exception("nom incorrect");
    }else
	{
		$nom=str_replace("  "," ",trim($nom));
	}
	
	//verification du prenom
	if(!preg_match("/^[A-Z][a-zA-Z]* [a-zA-Z]\.$/",$prenom))
	{
		throw new Exception("nom incorrect");
	}else
	{
		$nom=str_replace("  "," ",trim($nom));
	}
	
	//verification du groupe // a adpter
	if($groupe!=("caisse" || "comptable" || "secours" || "administrateur"))
	{
		throw new Exception("groupe incorrect");
    }
	
	//verification du login
// 	else if(!is_numeric($mt_caution))
// 	{
// 		throw new Exception("login non conforme");
// 	}

    //verification du password
    // 	else if(!is_numeric($mt_caution))
    	// 	{
    	// 		throw new Exception("password non conforme");
    	// 	}
	
	//tableau de avec les infos de l'usager
    $save = array( "nom" => $nom,"prenom" => $prenom, "login" => $login, "password" => $password, "statut" => $statut, "groupe" => $groupe, "magasin" => $magasin);
      
	//requete d'insertion		
    $request = $conn->prepare("INSERT INTO utilisateur (nom, prenom, login, password, statut, groupe, magasin) VALUES (:nom , :prenom , :login , :password , :statut, :groupe, :magasin)");
	$request->execute(array('nom' => $nom, 'prenom' => $prenom ,'login' => $login ,'password' => $password ,'statut' => $statut,'groupe' => $groupe,'magasin' => $magasin));
  }

  ////////////////////////////////
  //retourne un tableau  d'usager
  ////////////////////////////////
  public static function getUtilisateurs()
  {

    $conn = Connection::get();
    
    $select = $conn->query("SELECT id_user,login, mdp, nom, prenom, prem_connex, id_grp, id_mag FROM utilisateur");
	$result = array();

	
	
	while( $row = $select->fetch())
	{
		$result[] = $row; 
	}
	
    return $result; 

  }
  
  ////////////////////////////////
  //retourne un usager
  ////////////////////////////////
  public static function get($login)
  {

	//verification a faire
    $conn = Connection::get();
    $result=null;
    
	//requete sql preparé
    $request = $conn->prepare("SELECT id_user, login, mdp, nom, prenom ,statut,lib_grp, magasin.id_mag FROM utilisateur, groupe, magasin WHERE login=:login AND utilisateur.id_grp=groupe.id_grp AND utilisateur.id_mag=magasin.id_mag");
    $request->execute(array('login' => $login));
    
    
		while( $row = $request->fetch())
	{
		$result[] = $row;
		
	}
	

	return new Utilisateurs($result[0]['nom'], $result[0]['prenom'], $result[0]['id_user'], $result[0]['login'], $result[0]['mdp'], $result[0]['statut'], $result[0]['lib_grp'], $result[0]['id_mag']);
	
	//return $result[0][0];
	
  }
  ////////////////////////////////
  //retourne nom
  ////////////////////////////////
  public function getNom()
  {
	return $this->nom;
  }
  
  ////////////////////////////////
  //retourne prenom
  ////////////////////////////////
  public function getPrenom()
  {
  	return $this->Prenom;
  }
  
  ////////////////////////////////
  //retourne login
  ////////////////////////////////
  public function getLogin()
  {
	return $this->login;
  }
  
  ////////////////////////////////
  //retourne le groupe
  ////////////////////////////////
  public function getGroupe()
  {
	return $this->groupe;
  }
  
  ////////////////////////////////
  //retourne le statut
  ////////////////////////////////
  public function getstatut()
  {
  	return $this->statut;
  }
  
  ////////////////////////////////
  //retourne le id magasin
  ////////////////////////////////
  public function getIdMag()
  {
  	return $this->id_mag;
  }
  

  

}
