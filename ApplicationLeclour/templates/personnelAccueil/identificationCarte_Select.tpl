<H1>Service de secours</H1>
	<div class="centre">
	{if ($carte->getIdCarte() != NULL)}
	Id de la carte : {$carte->getIdCarte()} </br>
	Code barre : {$carte->getNumAleatoire()} </br>
	Numéro de série : {$carte->getNumSerie()} </br>
	Statut : {$carte->affichageStatut()} </br>
	Solde : {$carte->getSolde()} </br>
	Type de carte : {$carte->getIdTypeCarte()} </br>
	Id de sur-personnalisation : {$carte->getIdSurperso()} </br></br>
	Outils :</br>
	<form class='lien' action='././index.php?section=personnelAccueil&page=identificationCarte_Transactions' method='post'>
		<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
		<input type="submit" value="Consulter transactions"/>
	</form>	
	<form class='lien' action='././index.php?section=personnelAccueil&page=identificationCarte_Statut' method='post'>
		<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
		<input type="submit" value="Gestion du statut de la carte"/>
	</form>	
	{else}
	Carte non trouvée !
	{/if}
	</br></br>
	<form action='././index.php?' method='get'>
		<input type="hidden" value="personnelAccueil" name="section">
		<input type="hidden" value="identificationCarte" name="page">
		<input type="submit" value="Retour"/>
	</form>	
	</div>