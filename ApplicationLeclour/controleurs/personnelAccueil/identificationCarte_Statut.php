<?php
if (isset ( $_POST ['statut'] )) {
	Carte::modificationStatut ( $_POST ['idCarte'], $_POST ['statut'] );
	
	if( $_POST ['statut']  == 1 ) {
	$lblTransaction = "Activation";
	}
	elseif ( $_POST ['statut']  == 2 ) {
	$lblTransaction = "Déblocage";
	}
	elseif ( $_POST ['statut']  == 3 ) {
	$lblTransaction = "Blocage";
	}
	Transaction::creer($lblTransaction, $_SESSION['utilisateur']->getId(), $_POST ['idCarte']);
}
$carte = Carte::rechercheIdCarte ( $_POST ['idCarte'] );
$smarty->assign ( 'carte', $carte );
?>