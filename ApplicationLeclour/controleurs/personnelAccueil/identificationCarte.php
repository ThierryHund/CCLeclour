<?php

	if (isset ($_POST['numAleatoire'])){
	$var = $_POST['numAleatoire'];
	$smarty->assign('numero', $var);
	$smarty->display($_SERVER['DOCUMENT_ROOT'].'/webprojet/CCLeclour/ApplicationLeclour/templates/personnelAccueil/identificationCarte.tpl');
	}
$smarty->assign('numero', null);
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/webprojet/CCLeclour/ApplicationLeclour/templates/personnelAccueil/identificationCarte.tpl');
?>