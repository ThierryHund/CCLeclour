<html>
	<header>
	<link rel="stylesheet" href="./css/MainStyleSheet.css">
	</header>

	<body>
		<div class="header">	
		</div>
		<div class="entreHeaderFooter">
		<div class="menu">
			<nav>
				<ul class="listemenu">
					<li class="topmenu"></li>
					{*Creation utilisateur*}
					{if $smarty.get.page eq 'creationUtilisateur'}
						<li class="corpsmenu"><a class="lienmenuactif" href="index.php?section=administrateur&page=creationUtilisateur">Création utilisateur</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=administrateur&page=creationUtilisateur">Création utilisateur</a></li>
					{/if}
					{*Parametrage des Tarifs*}
					{if $smarty.get.page eq 'parametrageTarif' }
						<li class="corpsmenu"><a class="lienmenuactif" href="index.php?section=administrateur&page=parametrageTarif">Paramètrage des tarifs</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=administrateur&page=parametrageTarif">Paramètrage des tarifs</a></li>
					{/if}
					{*Commande carte B2C*}
					{if $smarty.get.page eq 'commandeCarte' && $smarty.get.section eq 'chefCaisse'}
						<li class="corpsmenu"><a class="lienmenuactif" href="index.php?section=chefCaisse&page=commandeCarte">Commande carte B2C</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=chefCaisse&page=commandeCarte">Commande carte B2C</a></li>
					{/if}
					{*Gestion de commandes B2C*}
					{if $smarty.get.page eq 'gestionCommandes' && $smarty.get.section eq 'chefCaisse'}
						<li class="corpsmenu"><a class="lienmenuactif" href="index.php?section=chefCaisse&page=gestionCommandes">Gestion des commandes B2C</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=chefCaisse&page=gestionCommandes">Gestion des commandes B2C</a></li>
					{/if}
					{*Commande de cartes B2B*}
					{if $smarty.get.page eq 'commandeCarte' && $smarty.get.section eq 'comptable'}
						<li class="corpsmenu"><a class="lienmenuactif" href="index.php?section=comptable&page=commandeCarte">Commande carte B2B</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=comptable&page=commandeCarte">Commande carte B2B</a></li>
					{/if}
					{*Gestion des commandes B2B*}
					{if $smarty.get.page eq 'gestionCommandes'  && $smarty.get.section eq 'comptable'}
						<li class="corpsmenu"><a class="lienmenuactif" href="index.php?section=comptable&page=gestionCommandes">Gestion des commandes B2B</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=comptable&page=gestionCommandes">Gestion des commandes B2B</a></li>
					{/if}
					{*Envoi de formulaire de sur-perso*}
					{if $smarty.get.page eq 'envoiFormulaire'}
						<li class="corpsmenu"><a class="lienmenuactif" href="index.php?section=comptable&page=envoiFormulaire">Envoi formulaire sur-perso</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=comptable&page=envoiFormulaire">Envoi formulaire sur-perso</a></li>
					{/if}
					{*Controle facture*}
					{if $smarty.get.page eq 'controleFacture'}
						<li class="corpsmenu"><a class="lienmenuacti" href="index.php?section=comptable&page=controleFacture">Contrôle facture</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=comptable&page=controleFacture">Contrôle facture</a></li>
					{/if}
					{*Identification Carte*}
					{if $smarty.get.page eq 'identificationCarte'}
						<li class="corpsmenu"><a class="lienmenuactf" href="index.php?section=personnelAccueil&page=identificationCarte">Identification carte</a></li>
					{else}
						<li class="corpsmenu"><a class="lienmenu" href="index.php?section=personnelAccueil&page=identificationCarte">Identification carte</a></li>
					{/if}			
					<li class="corpsmenu"><a class="lienmenu" href="index.php?key=out">Deconnexion</a></li>
					<li class="botmenu"></li>
				</ul>
			</nav>
		</div>
		<div class="contenu">