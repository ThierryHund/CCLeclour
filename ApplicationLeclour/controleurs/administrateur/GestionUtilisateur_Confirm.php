<?php
require_once _PATH_ . "modele/groupe.class.php";
require_once _PATH_ . "modele/magasin.class.php";
require_once _PATH_ . "modele/utilisateur.class.php";
if($_SESSION['utilisateur']->getGroupe()==("administrateur") && $_SESSION ['utilisateur']->getstatut()=="actif"){
$utilisateur = Utilisateurs::get ( $post ['login'] );

$parameters ['user'] ['nom'] = $post ['nom'];
$parameters ['user'] ['prenom'] = $post ['prenom'];
$parameters ['user'] ['statut'] = $post ['statut'];
$parameters ['user'] ['login'] = $post ['login'];
$parameters ['user'] ['mdp'] = $post ['mdp'];
$parameters ['user'] ['mdp_confirm'] = $post ['mdp_confirm'];
$parameters ['user'] ['magasin'] = intval ( $post ['entite'] );
$parameters ['user'] ['groupe'] = intval ( $post ['profil'] );
$parameters ['user'] ['statut'] = $post ['statut'];


if (($post ['mdp'] == $post ['mdp_confirm']) && $post ['mdp_confirm'] != "") {
	$parameters ['user'] ['password'] = $post ['mdp'];
	try {
		Utilisateurs::modifie ( $post ['nom'], $post ['prenom'], $post ['login'], $post ['vieux_login'], $post ['mdp'], $post ['statut'], $parameters ['user'] ['groupe'], $parameters ['user'] ['magasin'] );
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
} else
	try {

	Utilisateurs::modifie ( $post ['nom'], $post ['prenom'], $post ['login'], $post ['vieux_login'], $post ['mdp'], $post ['statut'], $parameters ['user'] ['groupe'], $parameters ['user'] ['magasin'] );
} catch ( Exception $e ) {
	$parameters ['error'] = ($e->getMessage ());
	;
}

$smarty->assign ( 'parameters', $parameters );
}
else {$smarty->display ( _TPL_ . 'error.tpl' );
die;
}
