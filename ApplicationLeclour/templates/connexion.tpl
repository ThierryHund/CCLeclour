	<h1>Connexion</h1>
	<div class="centre">
		<form id="connexion" method="post" action="index.php">
			<label for="login">Identifiant :</label>
			<input type="text" name="login" autofocus></br>
			<label for="pswd">Mot de passe :</label>
			<input type="password" name="pswd"></br>
			<input type="submit" value="Connexion" />
		</form>
		{if isset($erreur)}
		{$erreur}
		{/if}
	</div>