<H1>Activation d'une plage de carte</H1>
			
			<h2>Entrez le numéro de série de la première et de la dernière carte du lot</h2>
			<div class="centre">			
				<form id="activationPlage" method="POST" action="././index.php?section=comptable&page=activationPlage">
					<label for="plageDebut" >Debut de la plage :</label> 
					<input name="plageDebut" type="text" id="plageDebut"/></br>
					<label for="plageFin" >Fin de la plage :</label> 
					<input name="plageFin" type="text" id="plageFin"/><br/>
					<input type="submit" value="Activer"/>
				</form>
				</br>
				</br>
				{if (isset($plageDebut) && isset($plageFin))}
					La plage de carte a bien été activée !
					De la {$plageDebut} à la {$plageFin}.
				{/if}
			</div>
