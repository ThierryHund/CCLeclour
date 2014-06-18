<?php
require_once _PATH_ . "modele/commande.class.php";
/*echo var_dump($_SESSION['utilisateur']->getNom());
echo var_dump($_SESSION['utilisateur']->getPrenom());
echo var_dump($_SESSION['utilisateur']->getId());*/


if (! empty ( $post )) {

	$id_utilisateur = $_SESSION['utilisateur']->getId();
	$profil = $_SESSION['utilisateur']->getGroupe();
	$taille_array = sizeof($post['lib_theme']);
	
	$date = date("Y-m-d");
	$heure = date("H:i:s");
	//echo var_dump("taille_tab: ".$taille_array);
	//echo var_dump("id_util: ".$id_utilisateur);
	//echo var_dump("id_profil: ".$profil);
	//echo var_dump("date: ".$date);
	//echo var_dump("heure: ".$heure);

	try {
		Commande::creerCom($id_utilisateur, $date, $heure);
		
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
		
	for ($i=1;$i<=$taille_array;$i++){
		$lot = $i;
		$lib_theme = $post ['lib_theme'][$i];
		$quantite = $post ['quantite'][$i];
		$montant = $post ['montant'][$i];
		//echo var_dump("lot n°: ".$lot);
		//echo var_dump("lib_theme: ".$lib_theme);
		//echo var_dump("quantité: ".$quantite);
		//echo var_dump("montant: ".$montant);
		
	try {
			Commande::creerLot($lib_theme, $montant, $quantite, $taille_array);
			$parameters ['creation'] = "reussi";
		} catch ( Exception $e ) {
			$parameters ['error'] = ($e->getMessage ());
		}
	} 
}

$parameters ['theme'] = Commande::getThemes ();
$parameters ['montant'] = Commande::getMontant ();

$smarty->assign ( 'parameters', $parameters );
?>