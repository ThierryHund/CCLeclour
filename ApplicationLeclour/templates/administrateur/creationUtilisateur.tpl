			<H1>Cr�ation d'un utilisateur</H1>
				
			<div class="centre">
				<form id="formulaire" action="././controleurs/administrateur/creationUtilisateur.php">
					<label for="nom" >Nom :</label> 
					<input type="text" id="nom"/><br/>
					<label for="prenom" >Prenom :</label> 
					<input type="text" id="prenom"/><br/>
					<label for="login" >Login :</label> 
					<input type="text" id="login"/><br/>
					<label for="mdp" >Mot de passe :</label> 
					<input type="password" id="mdp" /><br/>
					<label for="entite">Entit�</label><br />
      				<select name="entite" id="entite">
					{foreach $parameters.magasins as $params}
					<option>{$params[1]}</option>
					{/foreach} 
					</select>
					<br/>

					
					<label for="profil">Profil</label><br />
      				<select name="profil" id="profil">
					{foreach $parameters.groupes as $params}
					<option>{$params[1]}</option>
					{/foreach}
					</select>
					
					<br/>
					<input type="submit" value="Valider"/>
				</form>
			</div>