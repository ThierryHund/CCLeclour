<head>
		<script type="text/javascript">
			
			i=0;
				// ajoute une ligne au tableau			
			function create_champ(){
											
				i++;	
																	
					var obj_tableau = document.getElementById("tableau_commande"); 
												
					var arrayLignes = obj_tableau.rows;
												
					var nbr_de_lignes = arrayLignes.length;
												
					var nouvelleLigne = obj_tableau.insertRow(nbr_de_lignes-1);
												
					var colonne1 = nouvelleLigne.insertCell(0);
						colonne1.innerHTML = +nbr_de_lignes-1 ;
					var colonne2 = nouvelleLigne.insertCell(1);
						colonne2.innerHTML = '<select name="lib_theme['+i+']" id="lib_theme">{foreach $parameters.theme as $params}<option VALUE={$params[0]}>{$params[0]}</option>{/foreach}';
					var colonne3 = nouvelleLigne.insertCell(2);
						colonne3.innerHTML = '<select name="montant['+i+']" id="montant">{foreach $parameters.montant as $params}<option VALUE={$params[0]}>{$params[0]}</option>{/foreach} ';
					var colonne4 = nouvelleLigne.insertCell(3);
						colonne4.innerHTML = '<input type="text" name="quantite['+i+']" value="" />';
					var colonne5 = nouvelleLigne.insertCell(4); 
						colonne5.innerHTML = '<input type="checkbox" name="delBox" value="checkbox" />';					
							{*'<input type="button" value="Supprimer" name="chkbox['+i+']" />';*}
													
			}
			
			function deleteRows(){
				
				cell = document.getElementById('tableau_commande');
				nBoxes = document.getElementsByName('delBox');
				for(i=1;i<=nBoxes.length;i++){  {*for (i=nBoxes.length-1; i>=0; i--){  *}
					if (nBoxes[i].checked == true){
						cell.deleteRow(i+1);
						
					}
				}
			}
	
		</script>
	</head>
	
		<H1>Commande B2B</H1>
		<p>Souhaitez-vous que les cartes soient sur-personnalisées ?</p>
			<div>
				<form method="post" id="commandeSurPerso" enctype="multipart/form-data" action="././index.php?section=comptable&page=commandeCarte">
					<input type="radio" name="commandeSurPerso" Value="oui">Oui
					<input type="file" name="file" id="file" /><br/>
					<input type="radio" name="commandeSurPerso" Value="non">Non
					<h1><input type="submit" value="Suivant"/></h1>
				</form>
			</div>
			
			
		
		<body onload="javascript:create_champ();">
				<!-- au chargement de la page on ajoute la premiere ligne produit -->
				
			
			<form id="radioSelectionUtilisateur" method="post" action="././index.php?section=comptable&page=commandeCarte">
			
				<table border="1" style=" width:90%" id="tableau_commande" >
				<tr>
					<th><label for="num_lot">Lot</label></th>
					<th><label for="lib_theme">Thème</label></th>
					<th><label for="montant">Montant</label></th>
					<th><label for="quantite">Quantité</label></th>
					<th><label for="Supprimer">Supprimer lot</label></th>
					
				</tr>
				<tr>
					<td colspan="2">
						<input name="button" type="button" class="input2" onClick="javascript:create_champ()" value="Ajouter un lot de cartes">
						
					</td>
					<td colspan="2">
						
						<input type="button" value="Supprimer" onClick="javascript:deleteRows()" />
					</td>
				</tr>
			</table>
			<input id="envoyer" type="submit" value="Envoyer" />
		</form>
			
		</body>