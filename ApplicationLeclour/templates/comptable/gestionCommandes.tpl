<H1>Gestion des Commandes B2C</H1>
			<div>
				
				<form method="post" action="././index.php?section=chefCaisse&page=gestionCommandes">
				
				<label for="id_com" >Id commande : </label> 
				<input type="text" name="id_com" id="id_com" /><br/>
				<label for="lib_type_com" >Type de commande : </label> 
				<input type="text" name="lib_type_com" id="lib_type_com" /><br/>
				<label for="date_com" >Date commande (format: 2014-04-25): </label> <br/>
				<input type="text" name="date_com" id="date_com" /><br/>

				<label for="id_utilisateur" >Identifiant utilisateur :</label> 
      			<select name="id_utilisateur" id="id_utilisateur">
				{foreach $parameters.utilisateurs as $params}
					<option >{$params[0]}</option>
				{/foreach} 
				</select><br/>
				
				<label for="nom" >Nom de l'utilisateur : </label> 
      			<select name="nom" id="nom">
				{foreach $parameters.utilisateurs as $params}
					<option >{$params[3]}</option>
				{/foreach}
				</select></br>
				<input id="rechercher" type="submit" value="Rechercher"/>
				</form>
			</div>
			<div>
				<TABLE BORDER="1" style=" width:90%;"> 
					 
					<TR>
						<TH></TH>
						<TH> Id commande </TH> 
						<TH> Libellé commande </TH> 
						<TH> Date commande </TH> 
						<TH> Heure commande </TH>
						<TH> Id utilisateur </TH>
						<TH> Nom utilisateur </TH>						
					</TR> 
				
					{if isset($parameters.listeCom) & !empty($parameters.listeCom)}
				
										
							{foreach $parameters.commandes as $params}
								<TR> 
									<TD style=" border:0;" ><input type="radio" value={$params['id_com']} name="id_com"></TD>
									<TD> {$params['id_com']} </TD> 
									<TD> {$params['lib_type_com']} </TD> 
									<TD> {$params['date_com']} </TD> 
									<TD> {$params['heure_com']} </TD>
									<TD> {$params['id_utilisateur']}</TD>
									<TD> {$params['nom']} </TD>						
								</TR> 
							{/foreach}
						
					
					{/if}
				
				</TABLE> 
			</div>