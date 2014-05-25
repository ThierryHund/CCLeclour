<H1>Contrôle de facture</H1>

<div>
	Saisissez les dates pour le contrôle facture
	</br>
	<form id="formaulaire" action="././index.php?section=comptable&page=controleFacture" method="post">

		<select id="formulaire_jours" name="jour_deb" required>
			<option value="">-</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>

		<select id="formulaire_mois" name="mois_deb" required>
			<option value="">-</option>
			<option value="1">Janvier</option>
			<option value="2">FÃ©vrier</option>
			<option value="3">Mars</option>
			<option value="4">Avril</option>
			<option value="5">Mai</option>
			<option value="6">Juin</option>
			<option value="7">Juillet</option>
			<option value="8">AoÃ»t</option>
			<option value="9">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Decembre</option>
		</select>

		<select id="formulaire_annÃ©e" name="annee_deb" required>
			<option value="">-</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
		</select>

		au

		<select id="formulaire_jours" name="jour_fin" required>
			<option value="">-</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>

		<select id="formulaire_mois" name="mois_fin" required>
			<option value="">-</option>
			<option value="1">Janvier</option>
			<option value="2">FÃ©vrier</option>
			<option value="3">Mars</option>
			<option value="4">Avril</option>
			<option value="5">Mai</option>
			<option value="6">Juin</option>
			<option value="7">Juillet</option>
			<option value="8">AoÃ»t</option>
			<option value="9">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Decembre</option>
		</select>

		<select id="formulaire_annÃ©e" name="annee_fin" required>
			<option value="">-</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
		</select>


<input type="submit" value="Valider"/>
		<br/>
		<br/>



	
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
	
{*

	</form>
	<form method="POST" action="././index.php?section=comptable&page=controleFacture">
	<input type="date" name="dateDeb" value="Date de début" onClick="this.value=''" onBlur="if(this.value=='') this.value='Date de début'"/>
	<input type="date" name="dateFin" value="Date de fin" onClick="this.value=''" onBlur="if(this.value=='') this.value='Date de fin'"/>
	<input type="submit" value="Envoyer"/>
	</form>
	</br>
	</br>
	</br>

	
	<form id="formaulaire" action="././index.php?section=comptable&page=controleFacture" method="post">

		<select id="formulaire_jours" name="jour_deb" required>
			<option value="">-</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>

		<select id="formulaire_mois" name="mois_deb" required>
			<option value="">-</option>
			<option value="1">Janvier</option>
			<option value="2">FÃ©vrier</option>
			<option value="3">Mars</option>
			<option value="4">Avril</option>
			<option value="5">Mai</option>
			<option value="6">Juin</option>
			<option value="7">Juillet</option>
			<option value="8">AoÃ»t</option>
			<option value="9">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Decembre</option>
		</select>

		<select id="formulaire_annÃ©e" name="annee_deb" required>
			<option value="">-</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
		</select>

		au

		<select id="formulaire_jours" name="jour_fin" required>
			<option value="">-</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>

		<select id="formulaire_mois" name="mois_fin" required>
			<option value="">-</option>
			<option value="1">Janvier</option>
			<option value="2">FÃ©vrier</option>
			<option value="3">Mars</option>
			<option value="4">Avril</option>
			<option value="5">Mai</option>
			<option value="6">Juin</option>
			<option value="7">Juillet</option>
			<option value="8">AoÃ»t</option>
			<option value="9">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Decembre</option>
		</select>

		<select id="formulaire_annÃ©e" name="annee_fin" required>
			<option value="">-</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
		</select>


<input type="submit" value="Valider"/>
		<br/>
		<br/>



	</form>
<p>{$parameters.datesInvalides}</p>
	<TABLE BORDER="1" style=" width:90%;"> 

		<tr>
			<th> PÃ©riode </th> 
			<th> Nombre de plages </th> 
			<th> Tarif </th> 
			<th> Prix Unitaire </th>
			<th> Nombre de Cartes </th>
			<th> Sous-Totaux </th>
		</tr>	

		<tr> 
			<td> 10 Juin 2011 - 9 Juin 2012 </td> 
			<td> 2 </td> 
			<td> 1 </td>
			<td> 0.10 </td> 	
			<td> 5000 </td> 	
			<td> 500 </td>
		</tr> 
		<tr> 
			<td></td> 
			<td></td> 
			<td> 2 </td>
			<td> 0.25 </td> 	
			<td> 1000 </td> 	
			<td> 250 </td>
		</tr> 

		<tr>
			<th> Total </th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th>750</th>
		</tr>

		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>

		<tr> 
			<td> 10 Juin 2012 - 9 Juin 2013 </td> 
			<td> 3 </td> 
			<td> 1 </td>
			<td> 0.10 </td> 	
			<td> 5000 </td> 	
			<td> 500 </td>
		</tr>

		<tr> 
			<td></td> 
			<td></td> 
			<td> 2 </td>
			<td> 0.25 </td> 	
			<td> 1000 </td> 	
			<td> 300 </td>
		</tr> 

		<tr> 
			<td></td> 
			<td></td> 
			<td> 3 </td>
			<td> 0.40 </td> 	
			<td> 300 </td> 	
			<td> 120 </td>
		</tr> 

		<tr>
			<th> Total </th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th>870</th>
		</tr>

	</TABLE>
	<p>
		<?php 
//require_once "controleTransaction.class.php";
//$essai = new controleTransaction("2013-06-11","2014-06-10");

		$lol = "mouarf";
		var_dump($lol);

		?>
	</p>
*}
</div>
