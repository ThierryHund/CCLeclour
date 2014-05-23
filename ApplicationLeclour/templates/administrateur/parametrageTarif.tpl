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
					<form id="affichageLignesParametrageTarif" method="POST" action="././index.php?section=administrateur&page=parametrageTarif_Confirm">
					{for $i=1 to $nbPlages}
						{if $i == 1}
							<input type="text" name="plage{$i}" value="0" readonly="readonly"/>
							à
						<input type="text" name="plage{$i}" onKeyUp="document.getElementById('{$i+1}').value=this.value" onblur="document.getElementById('{$i+1}').value=parseInt(this.value)+1"/>
			
						Tarif : <input type="text" name="tarif{$i}" />
						</br>
						
						{elseif $i == $nbPlages }
							<input type="text" name="plage{$i}" id="{$i}" readonly="readonly"/>
							et
							<input type="text" name="plage{$i}" value="Au dela" readonly="readonly"/>
							Tarif : <input type="text" name="tarif{$i}" />
							</br>
							
							
						{else}
							<input type="text" name="plage{$i}" id="{$i}" readonly="readonly"/>
							à
						<input type="text" name="plage{$i}" onKeyUp="document.getElementById('{$i+1}').value=this.value" onblur="document.getElementById('{$i+1}').value=parseInt(this.value)+1"/>
						
						Tarif : <input type="text" name="tarif{$i}" />
						</br>
						{/if}
					{/for}
					<input type="hidden" name="dateDeb" value="{$dateDeb}"/>
					<input type="hidden" name="dateFin" value="{$dateFin}"/>
					<input type="hidden" name="nbPlages" value="{$nbPlages}"/>
					<input type="submit" value="Enregistrer"/>
					</br>
					
					</form>
				{/if}
			</div>
