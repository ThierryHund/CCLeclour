			<H1>Création d'un utilisateur</H1>
				
			<div class="centre">
				<form id="formulaire" method="post" action="././index.php?section=administrateur&page=creationUtilisateur">
					<label for="nom" >Nom :</label> 
					<input type="text" name="nom" id="nom"/><br/>
					
					<label for="prenom" >Prenom :</label> 
					<input type="text" name="prenom" id="prenom"/><br/>
					
					<label for="login" >Login :</label> 
					<input type="text" name="login" id="login"/><br/>
					
					<label for="mdp" >Mot de passe :</label> 
					<input type="password" name="mdp" id="mdp" /><br/>
					
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
			</div>