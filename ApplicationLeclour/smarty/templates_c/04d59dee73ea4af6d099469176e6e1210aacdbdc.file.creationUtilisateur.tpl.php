<?php /* Smarty version Smarty-3.1.17, created on 2014-05-07 16:35:19
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\creationUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10418536a60c7c2d728-78358619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d59dee73ea4af6d099469176e6e1210aacdbdc' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\creationUtilisateur.tpl',
      1 => 1399245893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10418536a60c7c2d728-78358619',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536a60c7d10069_51100037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536a60c7d10069_51100037')) {function content_536a60c7d10069_51100037($_smarty_tpl) {?>			<H1>Création d'un utilisateur</H1>
				
			<div class="centre">
				<form id="formulaire" action="creationUtilisateur_Confirm.html">
					<label for="nom" >Nom :</label> 
					<input type="text" id="nom"/><br/>
					<label for="prenom" >Prenom :</label> 
					<input type="text" id="prenom"/><br/>
					<label for="login" >Login :</label> 
					<input type="text" id="login"/><br/>
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
			</div><?php }} ?>
