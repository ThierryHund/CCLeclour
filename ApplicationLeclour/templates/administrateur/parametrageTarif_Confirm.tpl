<H1>Paramétrage des tarifs</H1>

<h2>Données saisies</h2>



{if isset($traitement) }
{$traitement}
{else}
Contrat du {$dateDeb} au {$dateFin}
</br>
<form method="post" action="././index.php?section=administrateur&page=parametrageTarif_Confirm">
{for $i=1 to $nbPlages}
	<input type="hidden" value="{$dateDeb}" name="dateDeb"/>
	<input type="hidden" value="{$dateFin}" name="dateFin"/>
	<input type="hidden" value="{$nbPlages}" name="nbPlages"/>
	<input type="hidden" value="0" name="plage0"/>
	<input type="hidden" value="x" name="plage{$nbPlages}"/>
	<input type="hidden" value="{$plage[$i]}" name="plage{$i}"/>
	<input type="hidden" value="{$tarif[$i]}" name="tarif{$i}"/>
	{if $i==1}
		De 0 à la {$plage[$i]}è transaction : {$tarif[$i]}€ 
		</br>
	{elseif $i==$nbPlages}
		Puis à partir de la {$plage[$i-1]+1}è transactions : {$tarif[$i]}€
		</br>
	{else}
		De {$plage[$i-1]+1} à la {$plage[$i]}è transaction : {$tarif[$i]}€
		</br>
	{/if}
{/for}
<input type="hidden" name="confirmation" value="1"/>
<input type="submit" value="Confirmer"/>
</form>
{/if}