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
	//echo var_dump($taille_array);
	//echo var_dump($id_utilisateur);
	//echo var_dump($profil);
	//echo var_dump($date);
	//echo var_dump($heure);

	for ($i=1;$i<$taille_array+1;$i++){
		$lib_theme = $post ['lib_theme'][$i];
		$quantite = $post ['quantite'][$i];
		$montant = $post ['montant'][$i];
		/*echo var_dump($lib_theme);
		echo var_dump($quantite);
		echo var_dump($montant);*/
		
		try {
			Commande::creer($id_utilisateur, $lib_theme, $montant, $quantite, $date, $heure, $taille_array);
		} catch ( Exception $e ) {
			$parameters ['error'] = ($e->getMessage ());
		}
	} 
}

$parameters ['theme'] = Commande::getThemes ();
$parameters ['montant'] = Commande::getMontant ();

$smarty->assign ( 'parameters', $parameters );
?>