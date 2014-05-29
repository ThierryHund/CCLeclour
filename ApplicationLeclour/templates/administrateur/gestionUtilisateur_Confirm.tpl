<html>
	<head>
	<link rel="stylesheet" href="../../css/MainStyleSheet.css">
	</head>
	
	<body>
		<div>

			<H1>Gestion des utilisateurs</H1>
			<H2>Utilisateur selectionné</H2>	
			<div>
				<form id="formulaire" method="post" action="././index.php?section=administrateur&page=gestionUtilisateur_Confirm">
					<label for="nom" >Nom :</label> {$parameters.user.nom}</label>
					<input type="hidden" value="{$parameters.user.nom}" name="nom" id="nom" /><br/>
					
					<label for="prenom" >Prenom :</label> {$parameters.user.prenom}
					<input type="hidden" value="{$parameters.user.prenom}" name="prenom" id="prenom" /><br/>
					
					<label for="nom" >Identifiant :</label> {$parameters.user.login}
					<input type="hidden" value="{$parameters.user.login}" name="login" id="login" />
					<input type="hidden" name="vieux_login" id="vieux_login" value="{$parameters.user.login}"/><br/>
					
					<label for="prenom" >Mot de passe :</label> {$parameters.user.mdp}
					<input type="hidden" value="{$parameters.user.mdp}" name="mdp" id="mdp" /><br/>
					
					<label for="prenom" >Mot de passe confirmation :</label> {$parameters.user.mdp_confirm}
					<input type="hidden" value="{$parameters.user.mdp_confirm}" name="mdp_confirm" id="mdp_confirm" /><br/>
					
					<label for="entite" >statut :</label>{$parameters.user.statut}
					<input type="hidden" value="{$parameters.user.statut}" name="statut" id="statut" /><br/>
					
					<label for="entite" >Entité de rattachement :</label>{$parameters.user.magasin}
					<input type="hidden" value="{$parameters.user.magasin}" name="entite" id="entite" /><br/>
					
					<label for="profil" >Profil :</label>{$parameters.user.groupe}
					<input type="hidden" value="{$parameters.user.groupe}" name="profil" id="profil" /><br/>
					
					<input type="submit" value="Confirmer"/>
				</form>
				<div>
				
				</div>
			</div>
		</div>
	</body>

</html>