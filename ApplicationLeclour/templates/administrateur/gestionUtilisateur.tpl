			<H1>Gestion des utilisateurs</H1>
			<div>
				{*On n'est d'accord, en ligne ça aurait été mieux, mais on manque de place, et en tableu c'est vraiment trop moche...*}
				<form method="post" action="././index.php?section=administrateur&page=gestionUtilisateur">
				<label for="nom" >Nom : </label> 
				<input type="text" name="nom" id="nom" /><br/>
				<label for="nom" >Prénom : </label> 
				<input type="text" name="prenom" id="prenom" /><br/>
				<label for="nom" >Login : </label> 
				<input type="text" name="login" id="login" /><br/>

				<label for="nom" >Associé au magasin :</label> 
      			<select name="entite" id="entite">
				{foreach $parameters.magasins as $params}
					<option >{$params[1]}</option>
				{/foreach} 
				</select><br/>
				
				<label for="nom" >Profil de l'utilisateur : </label> 
      			<select name="profil" id="profil">
				{foreach $parameters.groupes as $params}
					<option >{$params[1]}</option>
				{/foreach}
				</select></br>
				<input id="rechercher" type="submit" value="Rechercher"/>
				</form>
			</div>
			<div>
				<TABLE BORDER="1" style=" width:90%;"> 
					 
					<TR>
						<TH></TH>
						<TH> Nom </TH> 
						<TH> Prenom </TH> 
						<TH> Login </TH> 
						<TH> Entité de rattachement </TH>
						<TH> Profil </TH>						
					</TR> 
					<form id="radioSelectionUtilisateur" method="post" action="././index.php?section=administrateur&page=gestionUtilisateur_select">
					
					{if isset($parameters.listeUtil) & !empty($parameters.listeUtil)}
					
										
						{foreach $parameters.listeUtil as $params}
							<TR> 
								<TD style=" border:0;" ><input type="radio" value={$params['login']} name="login"></TD>
								<TD> {$params['nom']} </TD> 
								<TD> {$params['prenom']} </TD> 
								<TD> {$params['login']} </TD> 
								<TD> {$params['lib_mag']}</TD>
								<TD> {$params['lib_profil']} </TD>						
							</TR> 
						{/foreach}
					
					{/if}
					

				</TABLE> 
				<input id="selectionner" type="submit" value="Selectionner"/>
				</form>
			</div>