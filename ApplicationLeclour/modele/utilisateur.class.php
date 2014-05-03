<?php
require_once "connection.class.php";
class Usagers
{
  private $nom;
  private $prenom;
  private $id;
  private $login;
  private $password;
  private $statut;
  private $groupe;
  private $magasin;
  
  public function __construct($nom, $prenom, $id, $login, $password, $statut, $groupe, $magasin)
  {
    $this->nom = $nom;
    $this->prenom = prenom;
    $this->id = $id;
    $this->login= $login;
	$this->password= $password;
	$this->statut= $statut;
	$this->groupe= $groupe;
	$this->magasin= $magasin;
  }
  
 ////////////////////////////////
 //Permet de créer un usager dans la base
 ////////////////////////////////
 
  public static function creer($nom, $prenom, $login, $password, $statut, $groupe, $magasin)
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
	if(!preg_match("/^[A-Z][a-zA-Z]* [a-zA-Z]\.$/",$prenomnom))
	{
		throw new Exception("nom incorrect");
	}else
	{
		$nom=str_replace("  "," ",trim($nom));
	}
	
	//verification du groupe // a adpter
	if($groupe="caisse" && $groupe!="comptable" && $groupe!="secours" && $groupe!="administrateur")
	{
		throw new Exception("categorie manquante");
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
    $save = array( "nom" => $nom,"prenom" => $prenom, "login" => $login, "mpassword" => $password, "statut" => $statut, "groupe" => $groupe, "magasin" => $magasin);
      
	//requete d'insertion		
    $request = $conn->prepare("INSERT INTO usager (num_carte, nom, num_categ, mt_caution, date_carte, solde) VALUES (:num_carte , :nom , :num_categ , :mt_caution , :date_carte, 0)");
	$request->execute(array('num_carte' => $num_carte, 'nom' => $nom ,'num_categ' => $num_categ ,'mt_caution' => $mt_caution ,'date_carte' => $date_carte));
  }

  ////////////////////////////////
  //retourne un tableau  d'usager
  ////////////////////////////////
  public static function getUsagers()
  {

    $conn = Connection::get();
    $select = $conn->query("SELECT id, nom, prenom, groupe, magasin FROM usager");
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
  public static function get($num_carte)
  {

	//verification a faire
    $conn = Connection::get();
    
	//requete sql preparé
    $request = $conn->prepare("SELECT num_carte, nom, lib_categ, mt_caution, date_carte FROM usager, categorie WHERE num_carte=:num_carte AND usager.num_categ=categorie.num_categ");
    $request->execute(array('num_carte' => $num_carte));
    
		while( $row = $request->fetch())
	{
		$result[] = $row;
	}

	return new Usagers($result[0]['nom'], $result[0]['num_carte'], $result[0]['lib_categ'], $result[0]['date_carte'], $result[0]['mt_caution']);
 
  }
  ////////////////////////////////
  //retourne nom
  ////////////////////////////////
  public function getNom()
  {
	return $this->nom;
  }
  
  ////////////////////////////////
  //retourne numero de carte
  ////////////////////////////////
  public function getNumCarte()
  {
	return $this->num_carte;
  }
  
  ////////////////////////////////
  //retourne la categorie
  ////////////////////////////////
  public function getCategorie()
  {
	$this->lib_categ;
  }
  

  

}
