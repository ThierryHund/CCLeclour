			<h1>Gestion des Commandes B2B</h1>
			<div class="centre">
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
								<form action="././index.php?section=chefCaisse&page=gestionCommandes_ligneCom" method="post">			
								{foreach $parameters.commande as $params}
									<TR id="{$params['id_com']}"> 
										<TD style=" border:0;" ><input type="radio" value={$params['id_com']} name="id_com" onClick="ajoutLigneCom({$params['id_com']})"></TD>
										<TD> {$params['date_com']} </TD> 
										<TD> {$params['heure_com']} </TD> 
										<TD> {$params['id_com']} </TD> 
										<TD> {$params['nom']} </TD>
										<TD> {$params['prenom']}</TD>
										<TD> {$params['id_utilisateur']} </TD>	
										<TD> {$params['login']} </TD>	
										
									</TR> 
								{/foreach}
								
					</TABLE> 
					<input type="submit" value="Détails de la commande"/>
					</form>
			</div>