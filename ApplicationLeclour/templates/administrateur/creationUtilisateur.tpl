			<H1>Création d'un utilisateur</H1>
				
			<div class="centre">
				{if isset($parameters.creation)}
					<p style="color:green;">Création réussie</p>
				{/if}
				{if isset($parameters.error)}
					<p style="color:red;">{$parameters.error}</p>
				{/if}
				<form id="formulaire" method="post" action="././index.php?section=administrateur&page=creationUtilisateur">
					<label for="nom" >Nom :</label> 
					<input type="text" name="nom" id="nom" onFocus='activateToolTips(this)' onBlur='deactivateTooltips()'/>
					<span class="tooltip">Format : Xxxxx xxxxx</span><br/>
					
					<label for="prenom" >Prenom :</label> 
					<input type="text" name="prenom" id="prenom" onFocus='activateToolTips(this)' onBlur='deactivateTooltips()'/>
					<span class="tooltip">Format : Xxxxx xxxxx</span><br/>
					
					<label for="login" >Identifiant :</label> 
					<input type="text" name="login" id="login" onFocus='activateToolTips(this)' onBlur='deactivateTooltips()'/>
					<span class="tooltip">Format : entre  4 et 16 caractères alpha-numériques</span><br/>
					
					<label for="mdp" >Mot de passe :</label> 
					<input type="password" name="mdp" id="mdp" onFocus='activateToolTips(this)' onBlur='deactivateTooltips()'/>
					<span class="tooltip">Format : entre  8 et 25 caractères</span><br/>

					<label for="mdp_confirm" >Confirmation :</label> 
					<input type="password" name="mdp_confirm" id="mdp_confirm" /><br/>
					
					<label for="entite">Entité</label>{*<br/>*}
      				<select name="entite" id="entite">
					{foreach $parameters.magasins as $params}
						<option VALUE={$params[0]}>{$params[1]}</option>
					{/foreach} 
					</select><br/>
					
					<label for="profil">Profil</label>{*<br/>*}
      				<select name="profil" id="profil">
					{foreach $parameters.groupes as $params}
						<option VALUE={$params[0]}>{$params[1]}</option>
					{/foreach}
					</select><br/>
					
					<input type="submit" value="Valider"/>
				</form>
				<script src="js/creationutilisateur.js"  type="text/javascript"></script>
			</div>