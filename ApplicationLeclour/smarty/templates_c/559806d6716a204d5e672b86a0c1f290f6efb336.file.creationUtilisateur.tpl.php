<?php /* Smarty version Smarty-3.1.18, created on 2014-05-04 10:37:25
         compiled from "templates\administrateur\creationUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1138453651105435658-36199132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '559806d6716a204d5e672b86a0c1f290f6efb336' => 
    array (
      0 => 'templates\\administrateur\\creationUtilisateur.tpl',
      1 => 1399198220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138453651105435658-36199132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53651105440ac9_60570539',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53651105440ac9_60570539')) {function content_53651105440ac9_60570539($_smarty_tpl) {?>		<div class="contenu">

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
