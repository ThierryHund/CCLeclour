		
		
	
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
		</script>
	</head>
	<body>
		<h1>Gestion des Commandes B2C</h1>
			<div>
				<h2>Recherche des commandes B2C par: </h2>
				<form method="post" action="././index.php?section=chefCaisse&page=gestionCommandes">
				
					<input type="checkbox" name="choix" value="id_com" onclick="submit(this.form)">Identifiant commande </br>
					<input type="checkbox" name="choix" value="id_utilisateur" onclick="submit(this.form)">Identifiant utilisateur </br>
					<input type="checkbox" name="choix" value="nom" onclick="submit(this.form)">Nom utilisateur </br>
					<input type="checkbox" name="choix" value="prenom" onclick="submit(this.form)">Prénom utilisateur </br>
					<input type="checkbox" name="choix" value="login" onclick="submit(this.form)">Identifiant de connexion </br>
					<input type="checkbox" name="choix" value="date" onclick="submit(this.form)">Date </br>
				</form>
				{if ($recherche == 'id_com')}
				<form id="rechercheIdCom" action="././index.php?section=chefCaisse&page=gestionCommandes_select" method="post">
					<label for="idCom" >Identifiant commande</label> 
					<input type="text" id="idCom" name="idCom"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>
				{else if ($recherche == 'id_utilisateur')}
				<form id="rechercheIdUtil" action="././index.php?section=chefCaisse&page=gestionCommandes_select" method="post">
					<label for="idUtil" >Identifiant utilisateur</label> 
					<input type="text" id="idUtil" name="idUtil"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>	
				{else if ($recherche == 'nom')}
				<form id="rechercheNom" action="././index.php?section=chefCaisse&page=gestionCommandes_select" method="post">
					<label for="nom" >Nom utilisateur</label> 
					<input type="text" id="nom" name="nom"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>	
				{else if ($recherche == 'prenom')}
				<form id="recherchePrenom" action="././index.php?section=chefCaisse&page=gestionCommandes_select" method="post">
					<label for="prenom" >Prénom utilisateur</label> 
					<input type="text" id="prenom" name="prenom"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>	
				{else if ($recherche == 'login')}
				<form id="rechercheLogin" action="././index.php?section=chefCaisse&page=gestionCommandes_select" method="post">
					<label for="login" >Identifiant de connexion</label> 
					<input type="text" id="login" name="login"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>	
				{else if ($recherche == 'date')}
				<form id="rechercheDate" action="././index.php?section=chefCaisse&page=gestionCommandes_select" method="post">
					<label for="date1" >Du </label> 
					<input type="date" id="date1" name="date1"/><br/>
					<label for="date2" >au </label> 
					<input type="date" id="date2" name="date2"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>	
				{/if}
			</div>
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