<H1>Commande cartes B2B</H1>
	
	<head>
			<script type="text/javascript">
				<!--
												//init variable JS globale, elle conserve sa valeur entre chaque appel de la fonction
												//c a d après le premier appel elle va passer à 1 etc...
				i=0;
								///
				function create_champ(){
												//on increment la variable globale i, numero de produit
					i++;	
												// en JS on peut atteindre les elements de la page HTML par document.getElementById
												// creation de l'objet tableau avec lequeml on va travailler
					var obj_tableau = document.getElementById("tableau_commande"); 
												//lecture des lignes du tableau actuel, JS le met dans un array
					var arrayLignes = obj_tableau.rows;
												//pour avoir le nombre de lignes, avec  .length on a la taille de l'array
					var nbr_de_lignes = arrayLignes.length;
												//on insere une nouvelle ligne de tableau juste avant celle contenant le bouton
					var nouvelleLigne = obj_tableau.insertRow(nbr_de_lignes-1);
												//ensuite on remplit chacune des cellules <td></td> du tableau avec les input
					var colonne1 = nouvelleLigne.insertCell(0);
					colonne1.innerHTML = "Lot  "+i;
					var colonne2 = nouvelleLigne.insertCell(1);
					colonne2.innerHTML = '<select name="lib_theme['+i+']" id="lib_theme">{foreach $parameters.theme as $params}<option VALUE={$params[2]}>{$params[2]}</option>{/foreach}';
					var colonne3 = nouvelleLigne.insertCell(2);
					colonne3.innerHTML = '<select name="montant['+i+']" id="montant">{foreach $parameters.theme as $params}<option VALUE={$params[3]}>{$params[3]}</option>{/foreach} ';
					var colonne4 = nouvelleLigne.insertCell(3);
					colonne4.innerHTML = '<input type="text" name="quantite['+i+']" value="" />';
					{*var colonne4 = nouvelleLigne.insertCell(3);
					colonne4.innerHTML = '<input type="text" name="prix['+i+']" value="" />';*}
														//tu peux rajouter des colonnes, modifier le name, mais garde sa forme name="lib_produit['+i+']"
														//ainsi tu pourra facilement récuper par $_POST['lib_produit'] qui est un array, donc boucler pour insertiondans BDD
				}
				-->
			</script>
		</head>
	
	
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
				
			
			<form id="radioSelectionUtilisateur" method="post" action="././index.php?section=chefCaisse&page=commandeCarte">
			
				<table border="1" style=" width:90%" id="tableau_commande" >
					<tr>
						<th><label for="num_lot">Lot</label></th>
						<th><label for="lib_theme">Thème</label></th>
						<th><label for="montant">Montant</label></th>
						<th><label for="quantite">Quantité</label></th>
						{*<th><label for="prix">Prix</label></th>*}
						
					</tr>
					<tr>
						<td colspan="4">
							<input name="button" type="button" class="input2" onClick="javascript:create_champ()" value="Ajouter un lot de cartes">
						</td>
					</tr>
				</table>
				<input id="envoyer" type="submit" value="Envoyer"/>
			</form>
			
		</body>