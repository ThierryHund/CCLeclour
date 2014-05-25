<H1>Service de secours</H1>
	<div class="centre">
	{if ($carte->getStatut() == 0) }
	Cette carte n'est pas activée.</br> Si vous souhaitez activer cette carte cliquez sur le bouton "Activer" ci dessous</br></br>
	<form action="././index.php?section=personnelAccueil&page=identificationCarte_Statut" method="post">
	<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
	<input type="hidden" name="statut" value="1">
	<input type="submit" value="Activer">
	</form>
	{/if}
	</br>
	{if ($carte->getStatut() == 1 || $carte->getStatut() == 2 ) }
	Cette carte n'est pas bloquée.</br> Si vous souhaitez bloquer cette carte cliquez sur le bouton "Bloquer" ci dessous</br></br>
	<form action="././index.php?section=personnelAccueil&page=identificationCarte_Statut" method="post">
	<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
	<input type="hidden" name="statut" value="3">
	<input type="submit" value="Bloquer">
	</form>
	</br>
	{elseif ($carte->getStatut() == 3)}
	Cette carte est bloquée.</br> Si vous souhaitez débloquer cette carte cliquez sur le bouton "Débloquer" ci dessous</br></br>
	<form action="././index.php?section=personnelAccueil&page=identificationCarte_Statut" method="post">
	<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
	<input type="hidden" name="statut" value="2">
	<input type="submit" value="Débloquer">
	</form>
	</br>
	{/if}
	
	<form action='././index.php?section=personnelAccueil&page=identificationCarte_Select' method='post'>
		<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
		<input type="submit" value="Retour"/>
	</form>	
	</div>