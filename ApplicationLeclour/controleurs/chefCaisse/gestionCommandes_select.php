<?php
require_once _PATH_ . "modele/commande.class.php";
require_once _PATH_ . "modele/utilisateur.class.php";
	
	
	if (! empty ( $post )) {
		$id_com = $post ['idCom'];
		$id_utilisateur = $post ['id_utilisateur'];
		$nom = $post ['nom'];
		$prenom = $post ['prenom'];
		$login = $post ['login'];
		$date_com_deb = $post ['date_com_deb'];
		$date_com_fin = $post ['date_com_fin'];
		
		echo var_dump($id_com);
		echo var_dump($id_utilisateur);
		echo var_dump($nom);
		echo var_dump($prenom);
		echo var_dump($login);
		echo var_dump($date_com_deb);
		echo var_dump($date_com_fin);
		
		$parameters ['commande'] = Commande::getCommandesBy($id_com, $id_utilisateur, $nom, $prenom, $login, $date_com_deb, $date_com_fin);
		$smarty->assign ( 'parameters', $parameters );
	}



/*


require_once _PATH_ . "modele/commande.class.php";
require_once _PATH_ . "modele/utilisateur.class.php";

if (! empty ( $post )) {
	
	$id_com = $post ['id_com'];
	$lib_type_com = $post ['lib_type_com'];
	$date_com = $post ['date_com'];	
	$id_utilisateur = $post ['id_utilisateur'];
	$nom = $post ['nom'];
	
	echo var_dump($id_com);
	echo var_dump($lib_type_com);
	echo var_dump($date_com);
	echo var_dump($id_utilisateur);
	echo var_dump($nom);
	echo var_dump($post);
	
	try {	
		$listeCom = Commande::getCommandesBy($id_com, $date_com, $lib_type_com, $id_utilisateur, $nom);
		
		$parameters ['listeCom'] = $listeCom;
		echo var_dump($parameters ['listeCom']);
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
	

//echo var_dump($_GET ['section']);
}

$parameters ['utilisateurs'] = Utilisateurs::getUtilisateurs ();
$parameters ['commandes'] = Commande::getCommandes ();
$smarty->assign ( 'parameters', $parameters );
*/
?>