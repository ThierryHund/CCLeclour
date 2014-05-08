<?php /* Smarty version Smarty-3.1.18, created on 2014-05-08 21:18:29
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\gestionUtilisateur_select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32480536bf4a50d4515-85318253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111ffd751ac3d0cbffd127f6a14b12d3e652a186' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\gestionUtilisateur_select.tpl',
      1 => 1399198220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32480536bf4a50d4515-85318253',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536bf4a517b8e9_56234883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536bf4a517b8e9_56234883')) {function content_536bf4a517b8e9_56234883($_smarty_tpl) {?><html>
	<head>
	<link rel="stylesheet" href="../../css/MainStyleSheet.css">
	</head>
	
	<body>
		<div>

			<H1>Gestion des utilisateurs</H1>
				
			<div>
				<form id="formulaire" action="gestionUtilisateur_Confirm.html">
					<label for="nom" >Nom :</label> 
					<input type="text" id="nom" value="Dupont" /><br/>
					<label for="prenom" >Prenom :</label> 
					<input type="text" id="prenom" value="Pierre"/><br/>
					<label for="login" >Login :</label> 
					<input type="text" id="login" value="Dupont46"/><br/>
					<label for="mdp" >Mot de passe :</label> 
					<input type="password" id="mdp" /><br/>
					<label for="entite" >Entité de rattachement :</label>
					<select id="entite">
						<option>Leclour Informatique</option>
						<option>Leclour Technopole</option>
						<option>Leclour Mondelange</option>
					</select>
					<br/>
					<label for="profil" >Profil :</label>
					<select id="profil">
						<option>Personnel d'accueil</option>
						<option>Comptable</option>
						<option>Chef de caisse</option>
						<option>Administrateur</option>
					</select>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
			</div>
		</div>
	</body>

</html><?php }} ?>
