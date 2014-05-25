		
		
	
	<head>
		<script type="text/javascript">
			function choixSelect(){
							
					nBoxes = document.getElementsByName('choix');
					for (i=nBoxes.length-1; i>=0; i--){
						if (nBoxes[i].checked == true){
							cell.deleteRow(i+1);
							
						}
					}
			}
			
			function testcheck()
			{
			   $test=false;
			   for ($i=1; $i<=6; $i++)
			   {
				$choix=document.getElementById('checkbox'+$i).checked;
				if ($choix==true)
				{
				  $test=true;
				}
			  }
			   if ($test==true)
			   {
			   document.getElementById('form1').submit();
			  }else{
			   alert("Vous devez faire au moins un choix :");
			  }
			}
			
		</script>
	</head>
	<body>
		<h1>Gestion des Commandes B2C</h1>
			
				<h2>Recherche des commandes B2C par: </h2>
				<form id="form1" method="post" action="././index.php?section=chefCaisse&page=gestionCommandes">
					
					<input type="checkbox" name="checkbox1" id="checkbox1" value="id_com" >Identifiant commande </br>
					<input type="checkbox" name="checkbox2" id="checkbox2" value="id_utilisateur" >Identifiant utilisateur </br>
					<input type="checkbox" name="checkbox3" id="checkbox3" value="nom" >Nom utilisateur </br>
					<input type="checkbox" name="checkbox4" id="checkbox4" value="prenom" >Prénom utilisateur </br>
					<input type="checkbox" name="checkbox5" id="checkbox5" value="login" >Identifiant de connexion </br>
					<input type="checkbox" name="checkbox6" id="checkbox6" value="date" >Date </br>
					
					<p><input type="button" name="Submit" value="Valider" onclick="testcheck()" /></p>
					
				</form>
			
				<form id="form2" action="././index.php?section=chefCaisse&page=gestionCommandes_select" method="post">
					{if ($recherche != null)}
						{if ($recherche[1] == 'id_com')}
							
								<label for="idCom" >Identifiant commande</label> 
								<input type="text" id="idCom" name="idCom"/><br/>
							
						{/if}	
						{if ($recherche[2] == 'id_utilisateur')}
							
								<label for="idUtil" >Identifiant utilisateur</label> 
								<input type="text" id="idUtil" name="idUtil"/><br/>
								
						{/if}	
						{if ($recherche[3] == 'nom')}
							
								<label for="nom" >Nom utilisateur</label> 
								<input type="text" id="nom" name="nom"/><br/>
								
						{/if}
						{if ($recherche[4] == 'prenom')}
							
								<label for="prenom" >Prénom utilisateur</label> 
								<input type="text" id="prenom" name="prenom"/><br/>
									
						{/if}
						{if ($recherche[5] == 'login')}
							
								<label for="login" >Identifiant de connexion</label> 
								<input type="text" id="login" name="login"/><br/><br/>
												
						{/if}
						{if ($recherche[6] == 'date')}
							
								<label for="date1" >Du </label> 
								<input type="date" id="date1" name="date1" value="aaaa-mm-jj"/><br/>
								<label for="date2" >au </label> 
								<input type="date" id="date2" name="date2" value="aaaa-mm-jj"/><br/>
													
						{/if}
					{/if}
					<input type="submit" value="Rechercher"/>
				</form>	
	</body>			
				
				{*<label for="id_com" >Id commande : </label> 
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
			*}