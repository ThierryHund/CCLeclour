<?php
$smarty->assign('dateDeb', $_POST['dateDeb']);
$smarty->assign('dateFin', $_POST['dateFin']);
$smarty->assign('nbPlages', $_POST['nbPlages']);
for ($i=1; $i<= $_POST['nbPlages']; $i++) {
	$plage[$i] = $_POST['plage'.$i];
	$tarif[$i] = $_POST['tarif'.$i];
}
$smarty->assign('plage', $plage);
$smarty->assign('tarif', $tarif);
$plage[0]= '0';
if(isset($_POST['confirmation'])){
	for ($i=1; $i<= $_POST['nbPlages']; $i++) {
	if( $i==1){
		TarifTransaction::creer($tarif[$i], $_POST['dateDeb'], $_POST['dateFin'], $plage[$i], $plage[0]);
	}
	else if ($i == $_POST['nbPlages'] ){
		TarifTransaction::creer($tarif[$i], $_POST['dateDeb'], $_POST['dateFin'], 'x', $plage[$i-1]+1);
	}
	else{
		TarifTransaction::creer($tarif[$i], $_POST['dateDeb'], $_POST['dateFin'], $plage[$i], $plage[$i-1]+1);
	}
	
	}
	$smarty->assign('traitement', 'Ajout à la base de données effectué');
}
?>