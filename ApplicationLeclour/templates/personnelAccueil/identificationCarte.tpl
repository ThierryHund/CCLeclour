			<H1>Service de secours</H1>
			<div class="centre">
			<H2>Recherche carte</H2>
				<form id="choixNumero" action="././index.php?section=personnelAccueil&page=identificationCarte" method="post">
					<input type="radio" name="choix" value="alea" onchange="submit(this.form)">Code barre <br>
					<input type="radio" name="choix" value="serie" onchange="submit(this.form)">Numéro de série
				</form>
				{if ($recherche == 'alea')}
				<form id="rechercheNumAleatoire" action="././index.php?section=personnelAccueil&page=identificationCarte_Select" method="post">
					<label for="numAleatoire" >Code barre :</label> 
					<input type="text" id="numAleatoire" name="numAleatoire"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>
				{else if ($recherche == 'serie')}
				<form id="rechercheNumSere" action="././index.php?section=personnelAccueil&page=identificationCarte_Select" method="post">
					<label for="numSerie" >Numéro de série :</label> 
					<input type="text" id="numSerie" name="numSerie"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>				
				{/if}
			</div>