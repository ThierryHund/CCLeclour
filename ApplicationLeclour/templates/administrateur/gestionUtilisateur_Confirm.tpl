<html>
	<head>
	<link rel="stylesheet" href="../../css/MainStyleSheet.css">
	</head>
	
	<body>
		<div>

			<H1>Gestion des utilisateurs</H1>
			<H2>Utilisateur selectionn�</H2>	
			<div>
				<form id="formulaire" method="post" action="././index.php?section=administrateur&page=gestionUtilisateur_Confirm">
					<label for="nom" >Nom :</label> {$parameters.user.nom}</label>
					<input type="hidden" value="{$parameters.user.nom}" name="nom" id="nom" /><br/>
					<label for="prenom" >Prenom :</label> {$parameters.user.prenom}
					<input type="hidden" value="{$parameters.user.prenom}" name="prenom" id="prenom" /><br/>
					<label for="nom" >Login :</label> {$parameters.user.login}
					<input type="hidden" value="{$parameters.user.login}" name="login" id="login" /><br/>
					<label for="prenom" >Mot de passe :</label> 
					<input type="hidden" value="{$parameters.user.password}" name="mdp" id="mdp" /><br/>
					<label for="prenom" >Mot de passe confirmation :</label> 
					<input type="hidden" value="{$parameters.user.password}" name="mdp" id="mdp" /><br/>
					<label for="entite" >statut :</label>{$parameters.user.statut}
					
					<input type="hidden" value="{$parameters.user.statut}" name="statut" id="statut" /><br/>
					<label for="entite" >Entité de rattachement :</label>{$parameters.user.magasin}
					<input type="hidden" value="{$parameters.user.magasin}" name="magasin" id="magasin" /><br/>
					<label for="profil" >Profil :</label>{$parameters.user.groupe}
					<input type="hidden" value="{$parameters.user.groupe}" name="groupe" id="groupe" /><br/>
					<input type="submit" value="Confirmer"/>
				</form>
				<div>
				<a href="gestionUtilisateur.html">Retour</a>
				</div>
			</div>
		</div>
	</body>

</html>