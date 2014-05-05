<?php


if (! empty ( $_POST )) {
	$nom = $_POST ['nom'];
	$prenom = $_POST ['prenom'];
	$login = $_POST ['login'];
	$mdp = $_POST ['mdp'];
	$id_grp = $_POST ['groupe'];
	$id_mag = $_POST ['magasin'];
	
	try {
		Utilisateurs::creer ( $nom, $prenom, $login, $mdp, $id_grp, $id_mag );
		// smarty affichage de l'ajout
		$smarty = new smartyIUT ();
		$smarty->assign ( 'parameters', $parameters );
		$smarty->display ( $_SERVER ['DOCUMENT_ROOT'] . '/webprojet/CCLeclour/ApplicationLeclour/templates/administrateur/creationUtilisateur_Confirm.tpl' );
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
}
$smarty->display ( $_SERVER ['DOCUMENT_ROOT'] . '/webprojet/CCLeclour/ApplicationLeclour/templates/administrateur/creationUtilisateur.tpl' );
?>