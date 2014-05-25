<?php

// Test selon choix de recherche
	if (! empty ( $post )) {		
			//de 1 à 6 car nom des checkbox "checkbox'i'" avec i de 1 à 6
		for($i=1;$i<=6;$i++){				
			if (! empty ( $post ['checkbox'.$i] )) {
				
				$choix = $post ['checkbox'.$i];
				$tab[$i] = $choix;

			}else{
				$tab[$i] = null;
			}
		}
		echo var_dump($tab);
		$smarty->assign ( 'recherche', $tab );
		
		
	} else {
		$smarty->assign ( 'recherche', 'null' );
	}
?>