<?php

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
			Utilisateurs::creer($nom, $prenom, $login, $mdp, $groupe, $magasin);
		}catch(Exception $e){ $parameters['error'] = ($e->getMessage());}
	}

	//smarty affichage de l'ajout
	$smarty = new smartyIUT();
	$smarty->assign('parameters', $parameters);
	//$smarty->assign('usagers', $usagers);
	$smarty->assign('login', $parameters['login']);
	$smarty->display("ajout.tpl");





$smarty->display($_SERVER['DOCUMENT_ROOT'].'/webprojet/CCLeclour/ApplicationLeclour/templates/administrateur/creationUtilisateur.tpl');
?>