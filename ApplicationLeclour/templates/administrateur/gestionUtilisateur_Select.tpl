<html>
	<head>
	<link rel="stylesheet" href="./css/MainStyleSheet.css">
	</head>
	
	<body>
		<div>

			<H1>Gestion des utilisateurs</H1>
				
			<div>
							{if isset($parameters.creation)}
					<p style="color:green;">Modification réussie</p>
				{/if}
				{if isset($parameters.error)}
					<p style="color:red;">{$parameters.error}</p>
				{/if}
				<form id="formulaire" method="post" action="././index.php?section=administrateur&page=gestionUtilisateur_select">
					<label for="nom" >Nom :</label> 
					<input type="text" name="nom" id="nom" onFocus='activateToolTips(this)' onBlur='deactivateTooltips()' value="{$parameters.user.nom}" />
					<span class="tooltip">Format : Xxxxx xxxxx</span><br/>
					
					<label for="prenom" >Prenom :</label> 
					<input type="text" name="prenom" id="prenom" onFocus='activateToolTips(this)' onBlur='deactivateTooltips()' value="{$parameters.user.prenom}"/>
					<span class="tooltip">Format : Xxxxx xxxxx</span><br/>
					
					<label for="login" >Identifiant :</label> 
					<input type="text" name="login" id="login" onFocus='activateToolTips(this)' onBlur='deactivateTooltips()' value="{$parameters.user.login}"/>
					<span class="tooltip">Format : entre  4 et 16 caractères alpha-numériques</span><br/>
					<input type="hidden" name="vieux_login" id="vieux_login" value="{$parameters.user.login}"/>
					
					<label for="mdp" >Mot de passe :</label> 
					<input type="password" name="mdp" id="mdp" onFocus='activateToolTips(this)' onBlur='deactivateTooltips()'/>
					<span class="tooltip">Format : entre  8 et 25 caractères</span><br/>
					
					<label for="mdp_confirm" >Confirmation :</label> 
					<input type="password" name="mdp_confirm" id="mdp_confirm" /><br/>
					
					<label for="statut" >Statut :</label> 
					<input type="text" name="statut" value="{$parameters.user.statut}" id="statut" /><br/>
					
					<label for="entite" >Entité :</label>
					<select name="entite" id="entite">
						{foreach $parameters.magasins as $params}
							{if $params[1] == $parameters.user.magasin}
								<option VALUE={$params[0]} selected="selected">{$params[1]}</option>
							{else}
								<option VALUE={$params[0]}>{$params[1]}</option>
							{/if}
							
						{/foreach} 
					</select>
					<br/>
					<label for="profil" >Profil :</label>
					<select name="profil" id="profil">
						{foreach $parameters.groupes as $params}
							{if $params[1] == $parameters.user.groupe}
								<option VALUE={$params[0]} selected="selected" >{$params[1]}</option>
								
							{else}
								<option VALUE={$params[0]}>{$params[1]}</option>
							{/if}
						{/foreach}
					</select>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
			</div>
		</div>
	</body>
	<script src="js/gestionutilisateur_select.js"  type="text/javascript"></script>

</html>