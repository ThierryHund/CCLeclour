<?php
require_once "modele/utilisateur.class.php";
require_once "modele/smarty_iut.php";

//Definition de quelques variables globales nécéssaire à un fonctionnement plus propre de système de routine
	// Si on a pas ces infos, rien ne peut fonctionner : die
	if (!isset($_SERVER['DOCUMENT_ROOT']))
		die();
	

	// Define de la racine du site
	define('_PATH_', $_SERVER['DOCUMENT_ROOT'].'/webprojet/CCLeclour/ApplicationLeclour/');

	// Define du dossier des Controleurs
	define('_CTRL_', _PATH_ . 'controleurs/');

	// Define du dossier des TPL
	define('_TPL_', _PATH_ . 'templates/');
	
	
session_start();

$parameters = array();
$parameters['connection'] = false;

//On ajoute toujours le header
$smarty = new smartyIUT();
$smarty->display("header.tpl");



////////////////////////////////
//creation de la session connection et acces a page d'acceuil 
////////////////////////////////
if((!empty($_POST['login']) && !empty($_POST['pswd'])) or isset($_SESSION['connecte']))
{
	if(!empty($_POST['login']) && !empty($_POST['pswd']))
	{
		$listeUtil = Utilisateurs::getUtilisateurs();
		foreach ($listeUtil as $value) {
			if($value['login']==$_POST['login'] && $value['mdp']==$_POST['pswd'] )
			{
	
				$_SESSION['connecte']=true;
				$_SESSION['utilisateur'] = Utilisateurs::get($value['login']);
				
				//var_dump($_SESSION['grp']);
// 				$parameters['login'] = $_SESSION['login'];
// 				$parameters['pswd'] = $_SESSION['pswd'];
// 				$parameters['connection'] = true;
			}else
			{
// 				$parameters['login'] = $_SESSION['login'];
// 				$parameters['pswd'] = $_SESSION['pswd'];
// 				$parameters['connection'] = true;
			}
		}
	}
}



////////////////////////////////
//affectation de la variable de navigation
////////////////////////////////
if (isset($_GET['key']))
{
	$nav = $_GET ['key'];
}else $nav=null;



////////////////////////////////
//deconnection
////////////////////////////////
if($nav=='out')
{
  session_unset();
  session_destroy();
}


////////////////////////////////
// page d'accueil post connection
////////////////////////////////

if((!empty($_POST['login']) && !empty($_POST['pswd'])) or isset($_SESSION['connecte']))
{
	if(!empty($_POST['login']) && !empty($_POST['pswd']))
	{
		$listeUtil = Utilisateurs::getUtilisateurs();
		
		foreach ($listeUtil as $value) {
			if($value['login']==$_POST['login'] && $value['mdp']==$_POST['pswd'] )
			{

				$_SESSION['connecte']=true;
				$_SESSION['utilisateur'] = Utilisateurs::get($value['login']);
				


			}
		}
	}
}



//Navigation entre les différentes pages
/*if (isset($_GET['page']) && isset($_GET['section']))

 $smarty->display(_TPL_.$_GET['section'].'/'.$_GET['page'].'.tpl');
else if(isset($_SESSION['connecte']))
{
$smarty->display(_TPL_ . 'accueil.tpl');
}
*/


var_dump($_SESSION);
	

//Navigation 2.0 ! On charge nos controleurs et les controleurs s'occupent d'afficher les bon templates		
if (isset($_GET['page']) && isset($_GET['section']) && isset($_SESSION['connecte']))
{
	include(_CTRL_.$_GET['section'].'/'.$_GET['page'].'.php');
}
else if(isset($_SESSION['connecte']))
{
	$smarty->display(_TPL_ . 'accueil.tpl');
}else $smarty->display(_TPL_ . 'connexion.tpl');

			
//Et on ajoutera toujours le footer en fin de page
$smarty->display("footer.tpl");
