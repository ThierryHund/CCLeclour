<?php
require_once _PATH_ . "modele/controleTransaction.class.php";





$smarty->display ( $_SERVER ['DOCUMENT_ROOT'] . '/webprojet/CCLeclour/ApplicationLeclour/templates/comptable/controleFacture.tpl' );

if (!empty ( $post )) {

echo var_dump($_POST);
$date_deb = "$_POST[annee_deb]-$_POST[mois_deb]-$_POST[jour_deb]";
$date_fin = "$_POST[annee_fin]-$_POST[mois_fin]-$_POST[jour_fin]";


echo var_dump($date_deb);
echo var_dump($date_fin);

$test = new controleTransaction($date_deb, $date_fin);

echo var_dump($test);

validationDate($date_deb, $date_fin);



}

/*
public function formatageDate($_POST)
{
	$date_deb = "'$_POST[0]'.'-'.'$_POST[1]'.'-'.'$_POST[2]'"
}
*/


$lol = "mouarf";
var_dump($lol);
?>