<?php
require_once _PATH_ . "modele/groupe.class.php";
require_once _PATH_ . "modele/magasin.class.php";
require_once _PATH_ . "modele/utilisateur.class.php";
if($_SESSION['utilisateur']->getGroupe()==("administrateur") && $_SESSION ['utilisateur']->getstatut()=="actif"){

if (! empty ( $post )) {
	
	$nom = $post ['nom'];
	$prenom = $post ['prenom'];
	$login = $post ['login'];
	$lib_profil = $post ['profil'];
	$lib_mag = $post ['entite'];
	
	try {
		$listeUtil = Utilisateurs::getUtilisateursBy ( $nom, $prenom, $login, $lib_mag, $lib_profil );
		
		$parameters ['listeUtil'] = $listeUtil;
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
}

$parameters ['groupes'] = Groupe::getGroupes ();
$parameters ['magasins'] = Magasin::getMagasins ();
$smarty->assign ( 'parameters', $parameters );
}
else {$smarty->display ( _TPL_ . 'error.tpl' );
die;
}
?>