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
	
	
?>