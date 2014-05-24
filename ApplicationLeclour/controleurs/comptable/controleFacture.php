<?php
require_once _PATH_ . "modele/controleTransaction.class.php";


if (!empty ( $post )) {

	echo var_dump($_POST);
	$date_deb = "$_POST[annee_deb]-$_POST[mois_deb]-$_POST[jour_deb]";
	$date_fin = "$_POST[annee_fin]-$_POST[mois_fin]-$_POST[jour_fin]";
	echo var_dump($date_deb);
	echo var_dump($date_fin);

	$test = new controleTransaction($date_deb, $date_fin);

	echo var_dump($test);

	$dates = validationDate($date_deb, $date_fin);
	if ($dates == null) {
		$parameters ['datesInvalides'] = "Les dates que vous avez séléctionnées sont invalides, veuillez les vérifier.";
	}else{
		
		$parameters ['datesInvalides'] = "";
	}

}

$smarty->assign ( 'parameters', $parameters );

$smarty->display ( $_SERVER ['DOCUMENT_ROOT'] . '/webprojet/CCLeclour/ApplicationLeclour/templates/comptable/controleFacture.tpl' );

$lol = "mouarf";
var_dump($lol);

?>