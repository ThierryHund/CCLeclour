<?php

// Ici on teste si l'utilisateur souhaite faire une recherche sur le code barre ou bien le numero de serie
if (isset ( $_POST ['choix'] )) {
	$smarty->assign ( 'recherche', $_POST ['choix'] );
} else {
	$smarty->assign ( 'recherche', 'nul' );
}
?>