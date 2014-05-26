<?php

// Test selon choix de recherche
		
			
			//de 1 à 6 car nom des checkbox "checkbox'i'" avec i de 1 à 6
		for($i=1;$i<=6;$i++){
			if (isset($_POST['checkbox'.$i])) {
				if (!empty($_POST['checkbox'.$i]) && !empty($_POST['checkbox'.$i])) {
					$tab[$i] = $_POST['checkbox'.$i];
				}
			}
			else{
					$tab[$i] = '';
				}
		}
		//echo var_dump($tab);
		$smarty->assign ( 'recherche', $tab );
		
		
	
?>