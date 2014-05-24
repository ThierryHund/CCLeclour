<?php
require_once _PATH_ . "modele/commande.class.php";

//recuperation des donnée du csv dans un tableau
$array = array ();
if (! empty ( $post )) {
	$csvData = file_get_contents ( $files ['file'] ['tmp_name'] );
	$lines = explode ( PHP_EOL, $csvData );
	$array = array ();
	foreach ( $lines as $line ) {
		$line = utf8_encode ($line);
		$array [] = str_getcsv ( $line,";" );
	}

	//recuperation du nom de l'entreprise
	$entreprise = $array[0][1];
	
	//recuperation surperso pour chaque carte
	$surperso = array();
	for($i=2;$i<count($array);$i++)
	{
		if(isset($array[$i][0]) && $array[$i][0]!=""){
			$surperso[$i-2][0]=$array[$i][0];
			$surperso[$i-2][1]=$array[$i][1];
			$surperso[$i-2][2]=$array[$i][2];
			$surperso[$i-2][4]=$array[$i][4];
			$surperso[$i-2][5]=$array[$i][5];
			$surperso[$i-2][6]=$entreprise;
		}
	}

	var_dump($surperso);



}


if (! empty ( $post )) {

	$id_type_carte = $post ['id_type_carte'];
	$lib_theme = $post ['lib_theme'];
	$code_theme = $post ['code_theme'];
	$montant = $post ['montant'];

	try {
		Commande::creer($id_client, $id_utilisateur, $id_type_com);
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
}

//$parameters ['theme'] = Commande::getTheme ();

$smarty->assign ( 'parameters', $parameters );
?>
