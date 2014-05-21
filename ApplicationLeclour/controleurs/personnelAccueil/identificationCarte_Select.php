<?php

// Ici on fait la recherche sur le code barre ou le numero de serie
if (isset ( $_POST ['numAleatoire'] )) {
	$num = $_POST ['numAleatoire'];
	
	$carte = Carte::rechercheNumAleatoire ( $num );
	$smarty->assign ( 'carte', $carte );
} else if (isset ( $_POST ['numSerie'] )) {
	$num = $_POST ['numSerie'];
	$carte = Carte::rechercheNumSerie($num);
	$smarty->assign ( 'carte', $carte );
} else if (isset ( $_POST ['idCarte'] )) {
	$num = $_POST ['idCarte'];
	$carte = Carte::rechercheIdCarte ( $num );
	$smarty->assign ( 'carte', $carte );
}

if ( $carte->getIdCarte() != NULL && (isset ( $_POST ['numSerie'] ) || isset ( $_POST ['numAleatoire'] ))) {
	Transaction::creer("consultation", $_SESSION['utilisateur']->getId(), $carte->getIdCarte());
}
?>