<?php /* Smarty version Smarty-3.1.18, created on 2014-05-04 17:16:58
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\creationUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79095366760a728327-49172951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785804e0f6c5fee5c49839a23d47039738789e92' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\creationUtilisateur.tpl',
      1 => 1399198220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79095366760a728327-49172951',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5366760a7bad42_44084727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366760a7bad42_44084727')) {function content_5366760a7bad42_44084727($_smarty_tpl) {?>		<div class="contenu">

			<H1>Création d'un utilisateur</H1>
				
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
			</div>
		</div><?php }} ?>
