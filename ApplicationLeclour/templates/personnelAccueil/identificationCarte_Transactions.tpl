<H1>Service de secours</H1>
<H2>Transactions</H2>
	<div class="centre">
	<table>
		<tr>
		<th>Id transaction</th>
		<th>Libellé transaction</th>
		<th>Date transaction</th>
		<th>Heure transaction</th>
		<th>Id utilisateur</th>
		</tr>
		{foreach from=$transactions item=transaction}
		<tr>
			<td>{$transaction->getIdTransac()}</td>
			<td>{$transaction->getLibTransac()}</td>
			<td>{$transaction->getDateTransac()}</td>
			<td>{$transaction->getHeureTransac()}</td>	
			<td>{$transaction->getIdUtilisateur()}</td>
		</tr>
		{/foreach}
	</table>
	</br></br>
	<form action='././index.php?section=personnelAccueil&page=identificationCarte_Select' method='post'>
		<input type="hidden" value="{$idCarte}" name="idCarte">
		<input type="submit" value="Retour"/>
	</form>	
	</div>