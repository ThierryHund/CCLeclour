<?php
require_once _PATH_ . "modele/transaction.class.php";
require_once _PATH_ . "modele/carte.class.php";

if (isset($_POST['plageDebut']) && isset($_POST['plageFin']) ) {
	for( $i=$_POST['plageDebut']; $i<=$_POST['plageFin']; $i++) {
		Transaction::creer("Activation", $_SESSION['utilisateur']->getId(), Carte::rechercheNumSerie($i)->getIdCarte());
	}
	$smarty->assign('plageDebut', $_POST['plageDebut']);
	$smarty->assign('plageFin', $_POST['plageFin']);
}




?>