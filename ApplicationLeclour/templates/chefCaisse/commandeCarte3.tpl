	
		<head>
			<script type="text/javascript">
				<!--
												
			{*	i=0;
								///
				function create_champ(){
												
					i++;	
												
												
					var obj_tableau = document.getElementById("tableau_commande"); 
												
					var arrayLignes = obj_tableau.rows;
												
					var nbr_de_lignes = arrayLignes.length;
												
					var nouvelleLigne = obj_tableau.insertRow(nbr_de_lignes-1);
												
					var colonne1 = nouvelleLigne.insertCell(0);
						colonne1.innerHTML = "Lot  "+i;
					var colonne2 = nouvelleLigne.insertCell(1);
						colonne2.innerHTML = '<select name="lib_theme['+i+']" id="lib_theme">{foreach $parameters.theme as $params}<option VALUE={$params[2]}>{$params[2]}</option>{/foreach}';
					var colonne3 = nouvelleLigne.insertCell(2);
						colonne3.innerHTML = '<select name="montant['+i+']" id="montant">{foreach $parameters.theme as $params}<option VALUE={$params[3]}>{$params[3]}</option>{/foreach} ';
					var colonne4 = nouvelleLigne.insertCell(3);
						colonne4.innerHTML = '<input type="text" name="quantite['+i+']" value="" />';
					var colonne5 = nouvelleLigne.insertCell();
						colonne5.innerHTML = '<INPUT type="checkbox" name="chk"/>'{*'<input name="supprimeLigne['+i+']" type="button" onClick="javascript:"deleteRow(this)" value="Supprimer">'*};
														
				}*}
				
				function addRow(tableID) {
 
					var table = document.getElementById(tableID);
		 
					var rowCount = table.rows.length;
					var row = table.insertRow(rowCount);
		 
					var colCount = table.rows[0].cells.length;
		 
					for(var i=0; i<colCount; i++) {
		 
						var newcell = row.insertCell(i);
		 
						newcell.innerHTML = table.rows[0].cells[i].innerHTML;
						//alert(newcell.childNodes);
						switch(newcell.childNodes[0].type) {
							case "text":
									newcell.childNodes[0].value = "";
									break;
							case "checkbox":
									newcell.childNodes[0].checked = false;
									break;
							case "select-one":
									newcell.childNodes[0].selectedIndex = 0;
									break;
						}
					}
				}
				
				function deleteRow(tableID) {
					try {
					var table = document.getElementById(tableID);
					var rowCount = table.rows.length;
		 
						for(var i=0; i<rowCount; i++) {
							var row = table.rows[i];
							var chkbox = row.cells[0].childNodes[0];
							if(null != chkbox && true == chkbox.checked) {
								if(rowCount <= 1) {
									alert("Cannot delete all the rows.");
									break;
								}
								table.deleteRow(i);
								rowCount--;
								i--;
							}		 
						}
					}catch(e) {
						alert(e);
					}
				}
				-->
			</script>
		</head>
		
		<body>
				<!-- au chargement de la page on ajoute la premiere ligne produit -->
				
			<H1>Commande B2C</H1>
			<form id="radioSelectionUtilisateur" method="post" action="././index.php?section=chefCaisse&page=commandeCarte">
							<input name="ajoutLigne" type="button" class="input2" onClick="addRow('tableau_commande')" value="Ajouter un lot de cartes" />
							<input name="supprLigne" type="button" class="input2" onclick="deleteRow('tableau_commande')" value="Supprimer" />
				<table border="1" width="90%" id="tableau_commande" >
					<tr>
						<th><label for="num_lot">Lot</label></th>
						<th><label for="lib_theme">Thème</label></th>
						<th><label for="montant">Montant</label></th>
						<th><label for="quantite">Quantité</label></th>
						<th><label for="prix">Supprimer</label></th>
						
					</tr>
					<tr>
						<td>Lot  +i</td>
						<td><select name="lib_theme['+i+']" id="lib_theme">{foreach $parameters.theme as $params}<option VALUE={$params[0]}>{$params[0]}</option>{/foreach}</td>
						<td><select name="montant['+i+']" id="montant">{foreach $parameters.montant as $params}<option VALUE={$params[0]}>{$params[0]}</option>{/foreach}</td>
						<td><input type="text" name="quantite['+i+']" value="" /></td>
						<td><input type="checkbox" name="chk"/></td>
						
						{*
						<td colspan="1" width=90%>
							<input name="ajoutLigne" type="button" class="input2" onClick="addRow('tableau_commande')" value="Ajouter un lot de cartes" />
							<input name="supprLigne" type="button" class="input2" onclick="deleteRow('tableau_commande')" value="Supprimer" />
						</td>
						*}
							
						
					</tr>
				</table>
				<input id="envoyer" type="submit" value="Envoyer"/>
			</form>
			
		</body>