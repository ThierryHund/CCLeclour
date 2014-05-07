<?php
require_once _PATH_."modele/groupe.class.php";
require_once _PATH_."modele/magasin.class.php";

	if(!empty($_POST))
	{
		$nom = $_POST[ 'nom' ] ;
		$prenom = $_POST[ 'prenom' ] ;
		$login= $_POST[ 'login' ] ;
		$mdp = $_POST[ 'mdp' ] ;
		$groupe = $_POST[ 'groupe' ];
		$magasin = $_POST[ 'magasin' ];
		
		
		try
		{	
			Utilisateurs::creer($nom, $prenom, $login, $mdp, Groupe::get($groupe), Magasin::get($magasin));
		}catch(Exception $e){ $parameters['error'] = ($e->getMessage());}
	}
	
	//smarty affichage de l'ajout
	
	//$smarty->assign('usagers', $usagers);
	$parameters['groupes'] = Groupe::getGroupes();
	$parameters['magasins'] = Magasin::getMagasins();
	$smarty = new smartyIUT();
	$smarty->assign('parameters', $parameters);




$smarty->display(_TPL_."administrateur/creationUtilisateur.tpl");
?>