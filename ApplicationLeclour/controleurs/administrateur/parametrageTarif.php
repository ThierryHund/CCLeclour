<?php
require_once _PATH_ . "modele/tarif_transaction.class.php";
require_once _PATH_ . "modele/transaction.class.php";

if (! empty ( $post )) {
	
	$id_tarif = $post ['id_tarif'];
	$prix = $post ['prix'];
	$date_deb = $post ['date_deb'];
	$date_fin = $post ['date_fin'];
	$nbcarte_max = $post ['nbcarte_max'];
	$nbcarte_min = $post ['nbcarte_min'];
	var_dump ( $id_tarif );
	var_dump ( $prix );
	var_dump ( $date_deb );
	var_dump ( $date_fin );
	var_dump ( $nbcarte_max );
	var_dump ( $nbcarte_min );
	
	try {
		TarifTransaction::creer ( $prix, $date_deb, $date_fin, $nbcarte_max, $nbcarte_min );
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
}

$parameters ['identifiant de transacaction'] = id_transac::getIdTransac ();
$parameters ['libellé de transaction'] = lib_transac::getLibTransac ();
$smarty->assign ( 'parameters', $parameters );
?>