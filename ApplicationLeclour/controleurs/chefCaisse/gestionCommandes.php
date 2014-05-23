<?php

// Test selon choix de recherche
	if (! empty ( $post )) {
		$choix = $post ['choix'];
		echo var_dump($choix);
		
		$smarty->assign ( 'recherche', $post ['choix'] );
	} else {
		$smarty->assign ( 'recherche', 'nul' );
	}
?>