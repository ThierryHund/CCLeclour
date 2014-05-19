<?php
require_once _PATH_ . "modele/commande.class.php";

if (! empty ( $post )) {
	
	$id_type_carte = $post ['id_type_carte'];
	$lib_theme = $post ['lib_theme'];
	$code_theme = $post ['code_theme'];
	$montant = $post ['montant'];
	
	try {
		Commande::creer($id_client, $id_utilisateur, $id_type_com);
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
}

$parameters ['theme'] = Commande::getTheme ();

$smarty->assign ( 'parameters', $parameters );
?>