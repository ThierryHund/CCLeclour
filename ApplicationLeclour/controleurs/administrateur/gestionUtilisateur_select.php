<?php
require_once _PATH_ . "modele/groupe.class.php";
require_once _PATH_ . "modele/magasin.class.php";
require_once _PATH_ . "modele/utilisateur.class.php";
if($_SESSION['utilisateur']->getGroupe()==("administrateur") && $_SESSION ['utilisateur']->getstatut()=="actif"){
$utilisateur = Utilisateurs::get ( $post ['login'] );

if(isset($post ['mdp'])){
	if (($post ['mdp'] == $post ['mdp_confirm']) && $post ['mdp_confirm'] != "") {
		$parameters ['user'] ['password'] = $post ['mdp'];
		try {
			Utilisateurs::modifie ( $post ['nom'], $post ['prenom'], $post ['login'], $post ['vieux_login'], $post ['mdp'], $post ['statut'], $post ['profil'], $post ['entite'] );
			$parameters ['creation'] = "reussi";
		} catch ( Exception $e ) {
			$parameters ['error'] = ($e->getMessage ());
		}
	} else if(($post ['mdp'] == $post ['mdp_confirm']) && $post ['mdp_confirm'] == "")
		try {
		
		Utilisateurs::modifie ( $post ['nom'], $post ['prenom'], $post ['login'], $post ['vieux_login'], $post ['mdp'], $post ['statut'], $post ['profil'], $post ['entite'] );
		$parameters ['creation'] = "reussi";
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
		;
	}
}

$parameters ['user'] ['nom'] = $utilisateur->getNom ();
$parameters ['user'] ['prenom'] = $utilisateur->getPrenom ();
$parameters ['user'] ['vieux_login'] = $utilisateur->getLogin ();
$parameters ['user'] ['login'] = $utilisateur->getLogin ();
// $parameters ['user'] ['password'] = $utilisateur->getPassword ();
$parameters ['user'] ['statut'] = $utilisateur->getStatut ();
$parameters ['user'] ['magasin'] = Magasin::getLibById ( $utilisateur->getIdMag () );
$parameters ['user'] ['groupe'] = Groupe::getLibById ( $utilisateur->getGroupe () );

$parameters ['groupes'] = Groupe::getGroupes ();
$parameters ['magasins'] = Magasin::getMagasins ();
$smarty->assign ( 'parameters', $utilisateur->getNom () );
$smarty->assign ( 'parameters', $parameters );
}
else {$smarty->display ( _TPL_ . 'error.tpl' );
die;
}