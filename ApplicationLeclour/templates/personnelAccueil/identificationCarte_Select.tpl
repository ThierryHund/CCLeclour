<H1>Service de secours</H1>
	<div class="centre">
	{if ($carte->getIdCarte() != NULL)}
	Id de la carte : {$carte->getIdCarte()} </br>
	Code barre : {$carte->getNumAleatoire()} </br>
	Num�ro de s�rie : {$carte->getNumSerie()} </br>
	Indice de blocage : {$carte->getBlocage()} </br>
	Solde : {$carte->getSolde()} </br>
	Type de carte : {$carte->getIdTypeCarte()} </br>
	Id de supersonnalisation : {$carte->getIdSurperso()} </br>
	{else}
	Carte non trouv�e !
	{/if}
	<form action="././index.php?section=personnelAccueil&page=identificationCarte">
		<input type="submit" value="Retour"/>
	</form>	
	</div>