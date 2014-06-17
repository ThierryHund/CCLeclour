<?php
require_once _PATH_ . "modele/groupe.class.php";
require_once _PATH_ . "modele/magasin.class.php";
if($_SESSION['utilisateur']->getGroupe()==("administrateur")){
	if (!empty ( $post )) {

		$nom = $post ['nom'];
		$prenom = $post ['prenom'];
		$login = $post ['login'];
		$mdp = $post ['mdp'];
		$groupe = intval ( $post ['profil'] );
		$magasin = intval ( $post ['entite'] );
		if($nom=="" || $prenom=="" || $login=="" || $mdp==""){
			$parameters ['error'] = "Tous les champs doivent être remplis";
		}else 	if (($post ['mdp'] != $post ['mdp_confirm'])) {
			$parameters ['error'] = "Validation du Mot de passe non conforme";
		} else{
			try {
				Utilisateurs::creer ( $nom, $prenom, $login, $mdp, $groupe, $magasin );
				$parameters ['creation'] = "reussi";

			} catch ( Exception $e ) {
				$parameters ['error'] = ($e->getMessage ());
			}
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
