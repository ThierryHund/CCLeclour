<?php /* Smarty version Smarty-3.1.18, created on 2014-05-07 19:48:28
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\creationUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113615367d9f2d4bba7-29904496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785804e0f6c5fee5c49839a23d47039738789e92' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\creationUtilisateur.tpl',
      1 => 1399492105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113615367d9f2d4bba7-29904496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5367d9f2d550f8_68587812',
  'variables' => 
  array (
    'parameters' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5367d9f2d550f8_68587812')) {function content_5367d9f2d550f8_68587812($_smarty_tpl) {?>			<H1>Création d'un utilisateur</H1>
				
			<div class="centre">
				<form id="formulaire" action="././controleurs/administrateur/creationUtilisateur.php">
					<label for="nom" >Nom :</label> 
					<input type="text" id="nom"/><br/>
					<label for="prenom" >Prenom :</label> 
					<input type="text" id="prenom"/><br/>
					<label for="login" >Login :</label> 
					<input type="text" id="login"/><br/>
					<label for="mdp" >Mot de passe :</label> 
					<input type="password" id="mdp" /><br/>
					<label for="entite">Entité</label><br />
      				<select name="entite" id="entite">
					<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['magasins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
					<option><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
					<?php } ?> 
					</select>
					<br/>

					
					<label for="profil">Profil</label><br />
      				<select name="profil" id="profil">
					<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['groupes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
					<option><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
					<?php } ?>
					</select>
					
					<br/>
					<input type="submit" value="Valider"/>
				</form>
			</div><?php }} ?>
