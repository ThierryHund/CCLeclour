<?php

	if(isset($_POST['dateDeb']) && isset($_POST['dateFin'])){
		//tests si dateDeb= Date de début ou si dateFin=Date de fin (cas ou l'utilisateur clique sur valider sans remplir
		
		//On a ici toutes les transactions comprises entre la date de début et la date de fin (saisies par l'utilisateur)
		$transactionsPeriode = Transaction::recherchePeriode($_POST['dateDeb'],$_POST['dateFin']);
		
		//On veut récupérer ici le nombre de contrats qui se suivent sur la periode saisie par l'utilisateur
		$contratsPeriode = TarifTransaction::contratConcerne($_POST['dateDeb'],$_POST['dateFin']);
		$smarty->assign('contrats',$contratsPeriode);
		
		$nbContrats = 0;
		$dateContrat = array();
		
		foreach ($contratsPeriode as $key => $contrat){
			if($key == 0){
				$nbContrats=1;
				$dateContrat[0][] = $contratsPeriode[$key]['date_deb'];
				$dateContrat[0][] = $contratsPeriode[$key]['date_fin'];
				
				
			}
			else {
				if($contratsPeriode[$key-1]['date_deb'] != $contratsPeriode[$key]['date_deb']){
					$dateContrat[$key][] = $contratsPeriode[$key]['date_deb'];
					$dateContrat[$key][] = $contratsPeriode[$key]['date_fin'];
					$nbContrats++;
				}
			}
					
		}
		$transactionContrat = array();
		foreach($dateContrat as $key=>$value){
			$transactionContrat[] = Transaction::recherchePeriode2($dateContrat[$key][0],$dateContrat[$key][1]);	 
		}
		$smarty->assign('transactionContrat',$transactionContrat);
		$smarty->assign('dateContrat', $dateContrat);
		$smarty->assign('nbContrats', $nbContrats);
		
		$tousContrats = TarifTransaction::decoupeContrat($contratsPeriode);
		$resultat = array();
		foreach($tousContrats as $key=>$value){
			$resultat[] = TarifTransaction::calculPrix($tousContrats[$key], $transactionContrat[$key][0]);
		}
		$prix = $resultat;
		$smarty->assign('prix', $prix);
		
		$totalPrix = 0;
		foreach($prix as $key=>$value){
			$totalPrix = $totalPrix + $value;
		}
		$smarty->assign('totalPrix', $totalPrix);
	}
	
	
/*
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
		$parameters ['datesInvalides'] = "Les dates que vous avez sÃ©lÃ©ctionnÃ©es sont invalides, veuillez les vÃ©rifier.";
	}else{
		
		$parameters ['datesInvalides'] = "";
	}

	desossage($dates);

}

$smarty->assign ( 'parameters', $parameters );

$smarty->display ( $_SERVER ['DOCUMENT_ROOT'] . '/webprojet/CCLeclour/ApplicationLeclour/templates/comptable/controleFacture.tpl' );

$lol = "mouarf";
var_dump($lol);

*/
?>