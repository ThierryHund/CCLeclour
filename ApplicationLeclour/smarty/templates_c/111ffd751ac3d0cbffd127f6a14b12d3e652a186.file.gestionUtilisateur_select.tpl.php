<?php /* Smarty version Smarty-3.1.18, created on 2014-05-08 23:11:08
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\gestionUtilisateur_select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32480536bf4a50d4515-85318253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111ffd751ac3d0cbffd127f6a14b12d3e652a186' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\gestionUtilisateur_select.tpl',
      1 => 1399590661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32480536bf4a50d4515-85318253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536bf4a517b8e9_56234883',
  'variables' => 
  array (
    'parameters' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536bf4a517b8e9_56234883')) {function content_536bf4a517b8e9_56234883($_smarty_tpl) {?><html>
	<head>
	<link rel="stylesheet" href="../../css/MainStyleSheet.css">
	</head>
	
	<body>
		<div>

			<H1>Gestion des utilisateurs</H1>
				
			<div>
				<form id="formulaire" method="post" action="././index.php?section=administrateur&page=gestionUtilisateur_Confirm">
					<label for="nom" >Nom :</label> 
					<input type="text" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['parameters']->value['user']['nom'];?>
" /><br/>
					<label for="prenom" >Prenom :</label> 
					<input type="text" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['parameters']->value['user']['prenom'];?>
"/><br/>
					<label for="login" >Login :</label> 
					<input type="text" id="login" value="<?php echo $_smarty_tpl->tpl_vars['parameters']->value['user']['login'];?>
"/><br/>
					<label for="mdp" >Mot de passe :</label> 
					<input type="password" id="mdp" /><br/>
					<label for="entite" >Entité de rattachement :</label>
					<select name="entite" id="entite">
						<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['magasins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['params']->value[1]==$_smarty_tpl->tpl_vars['parameters']->value['user']['magasin']) {?>
								<option selected="selected"><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
							<?php } else { ?>
								<option ><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
							<?php }?>
							
						<?php } ?> 
					</select>
					<br/>
					<label for="profil" >Profil :</label>
					<select name="profil" id="profil">
						<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['groupes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['params']->value[1]==$_smarty_tpl->tpl_vars['parameters']->value['user']['groupe']) {?>
								<option selected="selected" ><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
								
							<?php } else { ?>
								<option ><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
							<?php }?>
						<?php } ?>
					</select>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
			</div>
		</div>
	</body>

</html><?php }} ?>
