<?php
if (isset ( $_POST ['blocage'] )) {
	Carte::modificationBlocage ( $_POST ['idCarte'], $_POST ['blocage'] );
	
	if( $_POST ['blocage']  == 1 ) {
	$lblBlocage = "Blocage";
	}
	else {
	$lblBlocage = "Déblocage";
	}
	Transaction::creer($lblBlocage, $_SESSION['utilisateur']->getId(), $_POST ['idCarte']);
}
$carte = Carte::rechercheIdCarte ( $_POST ['idCarte'] );
$smarty->assign ( 'carte', $carte );
?>