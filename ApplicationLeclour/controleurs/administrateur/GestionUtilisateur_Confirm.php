<?php
require_once _PATH_ . "modele/groupe.class.php";
require_once _PATH_ . "modele/magasin.class.php";
require_once _PATH_ . "modele/utilisateur.class.php";
$utilisateur = Utilisateurs::get ( $post ['login'] );

$parameters ['user'] ['nom'] = $post ['nom'];
$parameters ['user'] ['prenom'] = $post ['prenom'];
$parameters ['user'] ['statut'] = $post ['statut'];
$parameters ['user'] ['login'] = $post ['login'];
$parameters ['user'] ['magasin'] = $post ['entite'];
$parameters ['user'] ['groupe'] = $post ['profil'];
$parameters ['user'] ['statut'] = $post ['statut'];

if (($post ['mdp'] = $post ['mdp_confirm']) && $post ['mdp'] != "") {
	$parameters ['user'] ['password'] = $post ['mdp'];
	try {
		Utilisateurs::modifie ( $post ['nom'], $post ['prenom'], $post ['login'], $post ['mdp'], $post ['statut'], $post ['profil'], $post ['entite'] );
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
} else
	try {
		Utilisateurs::modifie ( $post ['nom'], $post ['prenom'], $post ['login'], "", $post ['statut'], $post ['profil'], $post ['entite'] );
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}

$smarty->assign ( 'parameters', $parameters );

