<H1>Commande</H1>
	<p>Souhaitez-vous que les cartes soient sur-personnalisées ?</p>
			<div>
				<form method="post" id="commandeSurPerso" action="././index.php?section=comptable&page=commandeCarte">
					<input type="radio" name="commandeSurPerso" Value="oui">Oui
					<input type="file" name="file" id="file" /><br/>
					<input type="radio" name="commandeSurPerso" Value="non">Non
					<h1><input type="submit" value="Suivant"/></h1>
				</form>
			</div>
			
			<div>
				<h2>Ouvrir une Commande</h2>
					<form id="commandeNew" action="commandeNew.html">
					<label for="nbCarte" >Nombre de Cartes :</label> 
					<input type="textfield" id="nbCarte" /><br/>
					<label for="Valeur" >Valeur :</label> 
					<input type="textfield" id="Valeur" /><br/>
					<input type="submit" value="+"/>
					
				<p>Indiquez la composition de la commande :</p>
				
				<TABLE BORDER="1" style=" width:90%;"> 
					 
					<tr>
						<th> Lot N� </th> 
						<th> Valeur </th> 
						<th> Nombre de cartes </th> 
					</tr>	
					<tr> 
						<td> 1 </td> 
						<td> 25 </td> 
						<td> 250 </td> 					
					</tr> 
					<tr> 
						<td> 2 </td> 
						<td> 50 </td> 
						<td> 400 </td> 					
					</tr> 
					<tr> 
						<td> 3 </td> 
						<td> 75 </td> 
						<td> 250 </td> 					
					</tr> 
					<tr> 
						<td> 4 </td> 
						<td> 100 </td> 
						<td> 100 </td> 					
					</tr> 

				</TABLE> 
			</div>