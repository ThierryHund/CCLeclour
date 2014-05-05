<?php
require_once "connection.class.php";
class Groupe
{
	private $id_mag;
	private $lib_mag;


	public function __construct($id_mag, $lib_mag)
	{
		$this->id_mag = $id_mag;
		$this->lib_mag = $lib_mag;
	}



	////////////////////////////////
	//retourne un tableau  des groupe
	////////////////////////////////
	public static function getGroupes()
	{

		$conn = Connection::get();

		$select = $conn->query("SELECT id_mag, id_mag FROM magasin");
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
		$request = $conn->prepare("SELECT id_mag, lib_mag FROM magasin WHERE id_mag=:id_mag");
		$request->execute(array('login' => $login));


		while( $row = $request->fetch())
		{
			$result[] = $row;

		}


		return new Groupe($result[0]['id_mag'], $result[0]['lib_mag']);



	}

}
