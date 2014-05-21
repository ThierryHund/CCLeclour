<?php
require_once _PATH_ . "modele/tarif_transaction.class.php";
require_once _PATH_ . "modele/transaction.class.php";

if (isset($_POST['dateDeb']) && isset($_POST['dateFin']) && isset($_POST['nbPlages'])) {
	$smarty->assign('dateDeb', $_POST['dateDeb']);
	$smarty->assign('dateFin', $_POST['dateFin']);
	$smarty->assign('nbPlages', $_POST['nbPlages']);
}




/*$id_tarif = $post ['id_tarif'];
	$prix = $post ['prix'];
	$date_deb = $post ['date_deb'];
	$date_fin = $post ['date_fin'];
	$nbcarte_max = $post ['nbcarte_max'];
	$nbcarte_min = $post ['nbcarte_min'];

	
	try {
		TarifTransaction::creer ( $prix, $date_deb, $date_fin, $nbcarte_max, $nbcarte_min );
	} catch ( Exception $e ) {
		$parameters ['error'] = ($e->getMessage ());
	}
*/
?>