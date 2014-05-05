<?php
require_once "connection.class.php";
class Groupe
{
	private $id_grp;
	private $lib_grp;
	
	
	public function __construct($id_grp, $lib_grp)
	{
		$this->id_grp = $id_grp;
		$this->lib_grp = $lib_grp;
	}
	
	
	
	////////////////////////////////
	//retourne un tableau  des groupe
	////////////////////////////////
	public static function getGroupes()
	{
	
		$conn = Connection::get();
	
		$select = $conn->query("SELECT id_grp, id_grp FROM groupe");
		$result = array();
	
	
	
		while( $row = $select->fetch())
		{
			$result[] = $row;
		}
	
		return $result;
	
	}
	
	////////////////////////////////
	//retourne un groupe
	////////////////////////////////
	public static function get($login)
	{
	
		//verification a faire
		$conn = Connection::get();
		$result=null;
	
		//requete sql preparé
		$request = $conn->prepare("SELECT id_grp, lib_grp FROM groupe WHERE id_grp=:id_grp");
		$request->execute(array('login' => $login));
	
	
		while( $row = $request->fetch())
		{
			$result[] = $row;
	
		}
	
	
		return new Groupe($result[0]['id_grp'], $result[0]['lib_grp']);
	

	
	}
	
}
	