<H1>Service de secours</H1>
	<div class="centre">
	{if ($carte->getBlocage() == 0) }
	Cette carte n'est pas bloquée.</br> Si vous souhaitez bloquer cette carte cliquez sur le bouton "Bloquer" ci dessous</br></br>
	<form action="././index.php?section=personnelAccueil&page=identificationCarte_Blocage" method="post">
	<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
	<input type="hidden" name="blocage" value="1">
	<input type="submit" value="Bloquer">
	</form>
	{else}
	Cette carte est bloquée.</br> Si vous souhaitez débloquer cette carte cliquez sur le bouton "Debloquer" ci dessous</br></br>
	<form action="././index.php?section=personnelAccueil&page=identificationCarte_Blocage" method="post">
	<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
	<input type="hidden" name="blocage" value="0">
	<input type="submit" value="Debloquer">
	</form>
	{/if}
	</br>
	<form action='././index.php?section=personnelAccueil&page=identificationCarte_Select' method='post'>
		<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
		<input type="submit" value="Retour"/>
	</form>	
	</div>