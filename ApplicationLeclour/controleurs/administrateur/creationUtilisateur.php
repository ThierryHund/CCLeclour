<?php
require_once _PATH_ . "modele/groupe.class.php";
require_once _PATH_ . "modele/magasin.class.php";

if (! empty ( $post )) {
	
	$nom = $post ['nom'];
	$prenom = $post ['prenom'];
	$login = $post ['login'];
	$mdp = $post ['mdp'];
	$groupe = intval ( $post ['profil'] );
	$magasin = intval ( $post ['entite'] );
	var_dump($nom);
	var_dump($prenom);
	var_dump($login);
	var_dump($mdp);
	var_dump($magasin);
	var_dump($groupe);
	
	try {
		Utilisateurs::creer ( $nom, $prenom, $login, $mdp, $groupe, $magasin );
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
}

$parameters ['groupes'] = Groupe::getGroupes ();
$parameters ['magasins'] = Magasin::getMagasins ();
$smarty->assign ( 'parameters', $parameters );
?>