<?php
require_once _PATH_ . "modele/commande.class.php";
require_once _PATH_ . "modele/surperso.class.php";

//affichage de commande selon choix radio button
if (isset ( $_POST ['commandeSurPerso'] )) {
	//echo $_POST['commandeSurPerso'];
	$smarty->assign ( 'recherche', $_POST ['commandeSurPerso'] );
} else {
	$smarty->assign ( 'recherche', 'nul' );
}


//recuperation des donnée du csv dans un tableau
if (isset ( $_POST ['formOui'] )) {

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
				$surperso[$i-2]['nom']=$array[$i][0];
				$surperso[$i-2]['prenom']=$array[$i][1];
				$surperso[$i-2]['montant']=$array[$i][2];
				$surperso[$i-2]['theme']=$array[$i][4];
				$surperso[$i-2]['evenement']=$array[$i][5];
				$surperso[$i-2]['entreprise']=$entreprise;
			}
		}

		
		//insertion des surperso dans la table surperso
		foreach($surperso as $value){
			$info=array();
					$info['nom'] = $value['nom'];
					$info['prenom'] = $value['prenom'];
					$info['evenement'] = $value['evenement'];
					$info['entreprise'] = $value['entreprise'];
			
			var_dump($info);			
			Surperso::insererSurperso($info);
		}
		var_dump("voilou");



	}
}

/*echo var_dump($_SESSION['utilisateur']->getNom());
 echo var_dump($_SESSION['utilisateur']->getPrenom());
echo var_dump($_SESSION['utilisateur']->getId());*/


if (! empty ( $post['lib_theme'] )) {

	$id_utilisateur = $_SESSION['utilisateur']->getId();
	$profil = $_SESSION['utilisateur']->getGroupe();
	$taille_array = sizeof($post['lib_theme']);

	$date = date("Y-m-d");
	$heure = date("H:i:s");
	//echo var_dump("taille_tab: ".$taille_array);
	//echo var_dump("id_util: ".$id_utilisateur);
	//echo var_dump("id_profil: ".$profil);
	//echo var_dump("date: ".$date);
	//echo var_dump("heure: ".$heure);


	for ($i=1;$i<=$taille_array;$i++){
		$lot = $i;
		$lib_theme = $post ['lib_theme'][$i];
		$quantite = $post ['quantite'][$i];
		$montant = $post ['montant'][$i];
		$nom_client = $post ['nom_client'][$i];
	/*	echo var_dump("lot n°: ".$lot);
		echo var_dump("lib_theme: ".$lib_theme);
		echo var_dump("quantité: ".$quantite);
		echo var_dump("montant: ".$montant);
		echo var_dump("client: ".$nom_client);
*/
	
		try {
			Commande::creerComPerso($id_utilisateur, $date, $heure, $nom_client);
			Commande::creerLot($lib_theme, $montant, $quantite, $taille_array);
			$parameters ['creation'] = "reussi";
		} catch ( Exception $e ) {
			$parameters ['error'] = ($e->getMessage ());
		}
	}
	
}

$parameters ['theme'] = Commande::getThemes ();
$parameters ['montant'] = Commande::getMontant ();
$parameters ['nom_client'] = Commande::getNomClient ();

$smarty->assign ( 'parameters', $parameters );
?>
