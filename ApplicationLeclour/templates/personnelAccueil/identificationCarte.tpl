			<H1>Service de secours</H1>
				
			<div class="centre">
				<form id="rechercheNumAleatoire" action="././controleurs/personnelAccueil/identificationCarte.php">
					<label for="numAleatoire" >Code barre :</label> 
					<input type="text" id="numAleatoire"/><br/>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
				<form id="rechercheNumSere" action="">
					<label for="numAleatoire" >Code barre :</label> 
					<input type="text" id="numAleatoire"/><br/>
					<label for="numSerie" >Numéro de série :</label> 
					<input type="text" id="numSerie"/><br/>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
				{if ($numero != null)}
					Le numero saisi est {$numero}	
				{/if}
			</div>