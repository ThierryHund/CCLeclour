<?php
require_once _PATH_.'modele/groupe.class.php';
require_once _PATH_.'modele/magasin.class.php';

if (! empty ( $_POST ))
 {
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
}else
{
	$parameters['groupes']=Groupe::getGroupes();
	$parameters['magasins']=Magasin::getMagasins();
	$smarty->assign ( 'parameters', $parameters );
	$smarty->display ( $_SERVER ['DOCUMENT_ROOT'] . '/webprojet/CCLeclour/ApplicationLeclour/templates/administrateur/creationUtilisateur.tpl' );
	
}
?>