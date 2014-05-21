<H1>Paramétrage des tarifs</H1>
			
			<h2>Entrez les dates et le nombre de plages (dates au format AAAA-MM-JJ)</h2>
			<div class="centre">			
				<form id="parametrageTarif" method="POST" action="././index.php?section=administrateur&page=parametrageTarif">
					<label for="dateDebut" >Date de début</label> 
					<input name="dateDeb" type="text" id="dateDebut"/></br>
					<label for="dateFin" >Date de fin</label> 
					<input name="dateFin" type="text" id="dateFin"/><br/>
					<label for="nbPlages" >Nombre de plages</label> 
					<input name="nbPlages" type="text" id="nbPlages"/><br/>
					<input type="submit" value="Valider"/>
				</form>
				</br>
				</br>
				{if (isset($dateDeb))}
					<form id="affichageLignesParametrageTarif" action="././index.php?section=administrateur&page=parametrageTarif">
					{for $i=1 to $nbPlages}
						{if $i == 1}
							<input type="text" name="plage{$i}" value="0" readonly="readonly"/>
							à
						<input type="text" name="plage{$i}" onKeyUp="document.getElementById('{$i+1}').value=this.value"/>
			
						Tarif : <input type="text" name="tarif{$i}" />
						</br>
						{else if $i != $nbPlages }
													<input type="text" name="plage{$i}" id="{$i}"/>
							à
						<input type="text" name="plage{$i}" onKeyUp="document.getElementById('{$i+1}').value=this.value"/>
						
						Tarif : <input type="text" name="tarif{$i}" />
						</br>
							
						{else}

						
													<input type="text" name="plage{$i} id="{$i}"/>
							et
							<input type="text" name="plage{$i}" value="Au dela" readonly="readonly"/>
							Tarif : <input type="text" name="tarif{$i}" />
							</br>
							<input type="submit" value="Enregistrer"/>
						{/if}
					{/for}
					</br>
					
					</form>
				{/if}
			</div>
