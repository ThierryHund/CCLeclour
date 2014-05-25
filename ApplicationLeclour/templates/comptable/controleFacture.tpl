<H1>Contrôle de facture</H1>

<div>
	Saisissez les dates pour le contrôle facture
	</br>
	<form method="POST" action="././index.php?section=comptable&page=controleFacture">
	<input type="date" name="dateDeb" value="Date de début" onClick="this.value=''" onBlur="if(this.value=='') this.value='Date de début'"/>
	<input type="date" name="dateFin" value="Date de fin" onClick="this.value=''" onBlur="if(this.value=='') this.value='Date de fin'"/>
	<input type="submit" value="Envoyer"/>
	</form>
	</br>
	</br>
	</br>
	<table border="solid">
	<caption>Contrats concernés</caption>
	<tr>
				<th>ID tarif</th>
				<th>Date de début</th>
				<th>Date de fin</th>
				<th>Plage min</th>
				<th>Plage maxi</th>
				<th>Tarif</th>
				<th>Nb transactions</th>
				<th>Total estimé</th>
			</tr>
	{if isset($contrats)}
		{assign var=index value=1}
		{assign var=index2 value=0}
		{foreach $contrats item=contrat key=i}
			<tr>
				
				{if isset($dateContrat.$i)}
					<td>Contrat {$index}</td>
					{assign var=index value=$index+1}
					<td>{$dateContrat.{$i}.0}</td>
					<td>{$dateContrat.{$i}.1}</td>
				{else}
					<td></td>
					<td></td>
					<td></td>
				{/if}
				<td>{$contrat.nbcarte_min}</td>
				{if $contrat.nbcarte_max != ''}
					<td>{$contrat.nbcarte_max}</td>
				{else}
					<td>Et au delà</td>
				{/if}
				<td>{$contrat.prix} €</td>
				{if isset($dateContrat.$i)}
					<td>{$transactionContrat.{$index2}.0}</td>
					<td>{$prix.{$index2}} €</td>
					{assign var=index2 value=$index2+1}
					
				{else}
					<td></td>
				{/if}
			</tr>
		{/foreach}
	{/if}
	<tr></tr>
	<tr></tr>
	<td>TOTAL</td>
	{if isset($totalPrix)}
	<td>{$totalPrix}€</td>
	{/if}

	</table>
	
	
</div>
					