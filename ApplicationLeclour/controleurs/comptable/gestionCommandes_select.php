<?php
require_once _PATH_ . "modele/commande.class.php";
require_once _PATH_ . "modele/utilisateur.class.php";
	
	
	if (! empty ( $post ['idCom'] )) {
		$id_com = $post ['idCom'];
	}else{
		$id_com = null;
	}
	
	if (! empty ( $post ['idUtil'] )) {
		$id_utilisateur = $post ['idUtil'];
	}else{
		$id_utilisateur = null;
	}
	
	if (! empty ( $post ['nom'] )) {
		$nom = $post ['nom'];
	}else{
		$nom = null;
	}
	
	if (! empty ( $post ['prenom'] )) {
		$prenom = $post ['prenom'];
	}else{
		$prenom = null;
	}
	
	if (! empty ( $post ['login'] )) {
		$login = $post ['login'];
	}else{
		$login = null;
	}
	
	if (! empty ( $post ['dateDeb'] )) {
		$date_com_deb = $post ['dateDeb'];
	}else{
		$date_com_deb = null;
	}
	
	if (! empty ( $post ['dateFin'] )) {
		$date_com_fin = $post ['dateFin'];
	}else{
		$date_com_fin = null;
	}
	
		try {
			$listeCom = Commande::getCommandesBy($id_com, $id_utilisateur, $nom, $prenom, $login, $date_com_deb, $date_com_fin);
			$parameters ['commande'] = $listeCom;
		} catch ( Exception $e ) {
			$parameters ['error'] = ($e->getMessage ());
		}
		
		$smarty->assign ( 'parameters', $parameters );
		$ligneCom = array();
		foreach ($parameters['commande'] as $key=>$value){
			$ligneCom[] = Commande::getLigneCom($value['id_com']);
		}
		$smarty->assign('ligneCom', $ligneCom);
?>