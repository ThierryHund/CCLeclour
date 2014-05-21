
	<head>
		<script type="text/javascript">
			
			i=0;
				// ajoute un ligne au tableau			
			function create_champ(){
											
				i++;	
																		
				var obj_tableau = document.getElementById("tableau_commande"); 
											
				var arrayLignes = obj_tableau.rows;
											
				var nbr_de_lignes = arrayLignes.length;
											
				var nouvelleLigne = obj_tableau.insertRow(nbr_de_lignes-1);
											
				var colonne1 = nouvelleLigne.insertCell(0);
					colonne1.innerHTML = "Lot  "+i;
				var colonne2 = nouvelleLigne.insertCell(1);
					colonne2.innerHTML = '<select name="lib_theme['+i+']" id="lib_theme">{foreach $parameters.theme as $params}<option VALUE={$params[0]}>{$params[0]}</option>{/foreach}';
				var colonne3 = nouvelleLigne.insertCell(2);
					colonne3.innerHTML = '<select name="montant['+i+']" id="montant">{foreach $parameters.montant as $params}<option VALUE={$params[0]}>{$params[0]}</option>{/foreach} ';
				var colonne4 = nouvelleLigne.insertCell(3);
					colonne4.innerHTML = '<input type="text" name="quantite['+i+']" value="" />';
				var colonne4 = nouvelleLigne.insertCell(4);
				colonne4.innerHTML = '<input type="button" value="Supprimer" onclick="javascript:removeRow(this);" />';
													
			}
			
			function removeRow(src)
				{
					/* src refers to the input button that was clicked. 
					   to get a reference to the containing <tr> element,
					   get the parent of the parent (in this case <tr>)
					*/   
					var oRow = src.parentElement.parentElement;  
					
					//once the row reference is obtained, delete it passing in its rowIndex   
					document.all("tableau_commande").deleteRow(oRow.rowIndex);  

				}
			
		</script>
	</head>
	
	<body onload="javascript:create_champ();">
			<!-- au chargement de la page on ajoute la premiere ligne produit -->
			
		<H1>Commande B2C</H1>
		<form id="radioSelectionUtilisateur" method="post" action="././index.php?section=chefCaisse&page=commandeCarte">
		
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
				</tr>
			</table>
			<input id="envoyer" type="submit" value="Envoyer" />
		</form>
		
	</body>