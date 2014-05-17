<?php
require_once "modele/utilisateur.class.php";
require_once "modele/smarty_iut.php";

session_start ();
$parameters = array ();
$parameters ['connection'] = false;

// Modification faite par Yacine le 03/05 pour commencer à avoir une version fonctionnelle de l'application
// Pour l'instant on ne gère pas l'accès à la base et les controleurs ne sont pas opérationnels
// On va utiliser le controleur.php pour faire une première redirection et pouvoir inclure le header et le footer
if (! isset ( $_SESSION ['connecte'] )) {
	$smarty = new smartyIUT ();
	$smarty->display ( "header.tpl" );
	$smarty->display ( "administrateur/creationUtilisateur.tpl" );
	$smarty->display ( "footer.tpl" );
}

// //////////////////////////////
// acces page de connection
// //////////////////////////////
if (! isset ( $_SESSION ['connecte'] )) {
	$smarty = new smartyIUT ();
	$smarty->display ( "connexion.tpl" );
}

// //////////////////////////////
// creation de la session connection et acces a page d'acceuil
// //////////////////////////////
if ((! empty ( $_POST ['login'] ) && ! empty ( $_POST ['pswd'] )) or isset ( $_SESSION ['connecte'] )) {
	if (! empty ( $_POST ['login'] ) && ! empty ( $_POST ['pswd'] )) {
		if ($_POST ['login'] == 'admin' && $_POST ['pswd'] == 'password') {
			$_SESSION ['login'] = $_POST ['login'];
			$_SESSION ['pswd'] = $_POST ['pswd'];
			$_SESSION ['connecte'] = true;
			$parameters ['login'] = $_SESSION ['login'];
			$parameters ['pswd'] = $_SESSION ['pswd'];
			$parameters ['connection'] = true;
		}
	} else {
		$parameters ['login'] = $_SESSION ['login'];
		$parameters ['pswd'] = $_SESSION ['pswd'];
		$parameters ['connection'] = true;
	}
}

// //////////////////////////////
// affectation de la variable de navigation
// //////////////////////////////
if (isset ( $_GET ['key'] )) {
	$nav = $_GET ['key'];
} else
	$nav = null;
	
	// //////////////////////////////
	// deconnection
	// //////////////////////////////
if ($nav == 'out') {
	session_unset ();
	session_destroy ();
} 

// //////////////////////////////
// page d'accueil poste connection
// //////////////////////////////
else if ($parameters ['connection']) {
	$usager = null;
	try {
		$usagers = Usagers::getUsagers ();
	} catch ( Exception $e ) {
		$exception [] = $e->getMessage ();
	}
	
	// smarty affichage de la liste d'usagers + bouton ajout
	$smarty = new smartyIUT ();
	$smarty->assign ( 'parameters', $usagers );
	$smarty->assign ( 'login', $parameters ['login'] );
	$smarty->display ( "usagers.tpl" );
} 

// //////////////////////////////
// page d'ajout
// //////////////////////////////
else if ($nav == "ajout" && $parameters ['connection']) {
	if (! empty ( $_POST )) {
		$numCarte = $_POST ['numCarte'];
		$nom = $_POST ['nom'];
		$categorie = $_POST ['categorie'];
		$caution = $_POST ['caution'];
		$date = date ( 'Y-m-d' );
		
		try {
			Usagers::creer ( $numCarte, $nom, $categorie, $caution, $date );
		} catch ( Exception $e ) {
			$parameters ['error'] = ($e->getMessage ());
		}
	}
	
	// smarty affichage de l'ajout
	$smarty = new smartyIUT ();
	$smarty->assign ( 'parameters', $parameters );
	// $smarty->assign('usagers', $usagers);
	$smarty->assign ( 'login', $parameters ['login'] );
	$smarty->display ( "ajout.tpl" );
} 

// //////////////////////////////
// page de depot
// //////////////////////////////
else if ($nav == "depot" && $parameters ['connection']) {
	$user = Usagers::getUsagers ();
	
	// var_dump($user);
	if (! empty ( $_POST ))
		try {
			{
				$client = $_POST ['usager'];
				foreach ( $user as $params ) {
					if ($params ['nom'] == $client) {
						$numCarte = $params ['num_carte'];
					}
				}
				$montant = $_POST ['montant'];
				$date = date ( 'Y-m-d' );
				depot::creer ( $numCarte, $date, $montant );
			}
		} catch ( Exception $e ) {
			$parameters ['error'] = ($e->getMessage ());
		}
		// smarty affichage du depot
		// var_dump($user);
	$smarty = new smartyIUT ();
	$smarty->assign ( 'parameters', $parameters );
	$smarty->assign ( 'user', $user );
	$smarty->assign ( 'login', $parameters ['login'] );
	$smarty->display ( "depot.tpl" );
} 

// //////////////////////////////
// Liste des tarifs
// //////////////////////////////
else if ($nav == "tarif" && $parameters ['connection']) {
	try {
		if (isset ( $_GET )) {
			$tri = $_GET ['tri'];
		}
		$tarif = Tarif::getTarif ( $tri );
	} catch ( Exception $e ) {
		$exception [] = $e->getMessage ();
	}
	
	// smarty affichage de la liste des tarifs
	$smarty = new smartyIUT ();
	$smarty->assign ( 'parameters', $tarif );
	$smarty->assign ( 'login', $parameters ['login'] );
	$smarty->display ( "tarif.tpl" );
}


