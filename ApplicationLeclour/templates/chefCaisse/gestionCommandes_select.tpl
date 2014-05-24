			
			
			
			<h1>Gestion des Commandes B2C</h1>
			<div class="centre">
				{if ($commande->getIdCom() != NULL)}
					
				<div>
					<table border="1" style=" width:90%;"> 
					 
						<TR>
							<TH></TH>
							<TH> Date </TH> 
							<TH> Heure </TH> 
							<TH> Id commande </TH> 
							<TH> Nom </TH>
							<TH> Prénom </TH>
							<TH> Id utilisateur </TH>
							<TH> Id connexion </TH>
													
						</TR> 
					
						{if isset($parameters.listeCom) & !empty($parameters.listeCom)}
					
											
								{foreach $parameters.commande as $params}
									<TR> 
										<TD style=" border:0;" ><input type="radio" value={$params['id_com']} name="id_com"></TD>
										<TD> {$params['date_com']} </TD> 
										<TD> {$params['heure_com']} </TD> 
										<TD> {$params['id_com']} </TD> 
										<TD> {$params['nom']} </TD>
										<TD> {$params['prenom']}</TD>
										<TD> {$params['id_utilisateur']} </TD>	
										<TD> {$params['login']} </TD>	
										
									</TR> 
								{/foreach}
							
					
						{/if}
				
					</TABLE> 
			</div>
					
					Id de la commande : {$commande->getIdCarte()} </br>
					Code barre : {$carte->getNumAleatoire()} </br>
					Numéro de série : {$carte->getNumSerie()} </br>
					Indice de blocage : {$carte->affichageBlocage()} </br>
					Solde : {$carte->getSolde()} </br>
					Type de carte : {$carte->getIdTypeCarte()} </br>
					Id de sur-personnalisation : {$carte->getIdSurperso()} </br></br>
					Outils :</br>
					<form class='lien' action='././index.php?section=personnelAccueil&page=identificationCarte_Transactions' method='post'>
						<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
						<input type="submit" value="Consulter transactions"/>
					</form>	
					<form class='lien' action='././index.php?section=personnelAccueil&page=identificationCarte_Blocage' method='post'>
						<input type="hidden" value="{$carte->getIdCarte()}" name="idCarte">
						<input type="submit" value="Blocage/Deblocage"/>
					</form>	
					{else}
					
					Carte non trouvée !
				{/if}
				</br></br>
				<form action='././index.php?' method='get'>
					<input type="hidden" value="personnelAccueil" name="section">
					<input type="hidden" value="identificationCarte" name="page">
					<input type="submit" value="Retour"/>
				</form>	
			
			</div>