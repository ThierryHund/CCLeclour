<?php

// Test selon choix de recherche
		
			
			//de 1 à 6 car nom des checkbox "checkbox'i'" avec i de 1 à 6
		for($i=1;$i<=6;$i++){
			if (isset ( $post ['checkbox'.$i])) {
				if (! empty ( $post ['checkbox'.$i] && $post ['checkbox'.$i])) {
					
					$tab[$i] = $post ['checkbox'.$i];
					
				}
			}else{
					$tab[$i] = null;
				}
		}
		echo var_dump($tab);
		$smarty->assign ( 'recherche', $tab );
		
		
	
?>