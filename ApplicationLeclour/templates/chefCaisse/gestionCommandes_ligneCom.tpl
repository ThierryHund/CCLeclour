<div class="centre">
<H2>Détails de la commande</H2>
{if isset($ligneCom)}
	<table border=1px style="width:60%;">
	<caption>Commande n°{$ligneCom.0.1}</caption>
	<tr>
		<th>Type de carte</th>
		<th>Quantité</th>
		<th>Montant</th>
	</tr>
	{foreach $ligneCom as $key=>$value}
	<tr>
		<td>{$value.4}</td>           
		<td>{$value.0}</td>
		<td>{$value.3}</td>
	</tr>
	{/foreach}
	</table>
	
{/if}
</div>