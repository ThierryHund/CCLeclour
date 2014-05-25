<?php
if(isset($_POST['id_com'])){
	$ligneCom = Commande::getLigneCom($_POST['id_com']);
	$smarty->assign('ligneCom', $ligneCom);
}
?>