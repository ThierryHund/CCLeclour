<?php
require_once _PATH_ . "modele/groupe.class.php";
require_once _PATH_ . "modele/magasin.class.php";
require_once _PATH_ . "modele/utilisateur.class.php";
$utilisateur = Utilisateurs::get ( $post ['login'] );

$parameters ['user'] ['nom'] = $utilisateur->getNom ();
$parameters ['user'] ['prenom'] = $utilisateur->getPrenom ();
$parameters ['user'] ['vieux_login']= $utilisateur->getLogin ();
$parameters ['user'] ['login'] = $utilisateur->getLogin ();
$parameters ['user'] ['password'] = $utilisateur->getPassword ();
$parameters ['user'] ['statut'] = $utilisateur->getStatut ();
$parameters ['user'] ['magasin'] = Magasin::getLibById ( $utilisateur->getIdMag () );
$parameters ['user'] ['groupe'] = Groupe::getLibById ( $utilisateur->getGroupe () );

$parameters ['groupes'] = Groupe::getGroupes ();
$parameters ['magasins'] = Magasin::getMagasins ();
$smarty->assign ( 'parameters', $utilisateur->getNom () );
$smarty->assign ( 'parameters', $parameters );