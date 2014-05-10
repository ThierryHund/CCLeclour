<html>
	<head>
	<link rel="stylesheet" href="../../css/MainStyleSheet.css">
	</head>
	
	<body>
		<div>

			<H1>Gestion des utilisateurs</H1>
				
			<div>
				<form id="formulaire" method="post" action="././index.php?section=administrateur&page=gestionUtilisateur_Confirm">
					<label for="nom" >Nom :</label> 
					<input type="text" name="nom" id="nom" value="{$parameters.user.nom}" /><br/>
					<label for="prenom" >Prenom :</label> 
					<input type="text" name="prenom" id="prenom" value="{$parameters.user.prenom}"/><br/>
					<label for="login" >Login :</label> 
					<input type="text" name="login" id="login" value="{$parameters.user.login}"/><br/>
					<label for="mdp" >Mot de passe :</label> 
					<input type="password" name="mdp" id="mdp" /><br/>
					<label for="mdp_confirm" >Confirmation du mot de passe :</label> 
					<input type="password" name="mdp_confirm" id="mdp_confirm" /><br/>
					<label for="statut" >Statut :</label> 
					<input type="text" name="statut" id="statut" /><br/>
					<label for="entite" >Entité de rattachement :</label>
					<select name="entite" id="entite">
						{foreach $parameters.magasins as $params}
							{if $params[1] == $parameters.user.magasin}
								<option VALUE={$params[1]} selected="selected">{$params[1]}</option>
							{else}
								<option VALUE={$params[1]}>{$params[1]}</option>
							{/if}
							
						{/foreach} 
					</select>
					<br/>
					<label for="profil" >Profil :</label>
					<select name="profil" id="profil">
						{foreach $parameters.groupes as $params}
							{if $params[1] == $parameters.user.groupe}
								<option VALUE={$params[1]} selected="selected" >{$params[1]}</option>
								
							{else}
								<option VALUE={$params[1]}>{$params[1]}</option>
							{/if}
						{/foreach}
					</select>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
			</div>
		</div>
	</body>

</html>