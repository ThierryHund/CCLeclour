<?php
if (isset ( $_POST ['blocage'] )) {
	Carte::modificationBlocage ( $_POST ['idCarte'], $_POST ['blocage'] );
}
$carte = Carte::rechercheIdCarte ( $_POST ['idCarte'] );
$smarty->assign ( 'carte', $carte );

?>