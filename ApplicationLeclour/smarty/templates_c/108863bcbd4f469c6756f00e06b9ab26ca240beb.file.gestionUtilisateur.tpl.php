<?php /* Smarty version Smarty-3.1.18, created on 2014-05-08 21:26:08
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\gestionUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21731536bf230e53c71-73166818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '108863bcbd4f469c6756f00e06b9ab26ca240beb' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\gestionUtilisateur.tpl',
      1 => 1399584361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21731536bf230e53c71-73166818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536bf23108adb4_97785873',
  'variables' => 
  array (
    'parameters' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536bf23108adb4_97785873')) {function content_536bf23108adb4_97785873($_smarty_tpl) {?>			<H1>Gestion des utilisateurs</H1>
			<div>
				<form method="post" action="././index.php?section=administrateur&page=gestionUtilisateur">
				<input type="text" name="nom" id="nom" value="nom"/>
				<input type="text" name="prenom" id="prenom" value="prenom"/>
				<input type="text" name="login" id="login" value="login"/>
				
      			<select name="entite" id="entite">
				<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['magasins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
					<option ><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
				<?php } ?> 
				</select>
				
      			<select name="profil" id="profil">
				<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['groupes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
					<option ><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
				<?php } ?>
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
					
					<?php if (isset($_smarty_tpl->tpl_vars['parameters']->value['listeUtil'])&!empty($_smarty_tpl->tpl_vars['parameters']->value['listeUtil'])) {?>
					
										
						<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['listeUtil']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
							<TR> 
								<TD style=" border:0;" ><input type="radio" value=<?php echo $_smarty_tpl->tpl_vars['params']->value['login'];?>
 name="login"></TD>
								<TD> <?php echo $_smarty_tpl->tpl_vars['params']->value['nom'];?>
 </TD> 
								<TD> <?php echo $_smarty_tpl->tpl_vars['params']->value['prenom'];?>
 </TD> 
								<TD> <?php echo $_smarty_tpl->tpl_vars['params']->value['login'];?>
 </TD> 
								<TD> <?php echo $_smarty_tpl->tpl_vars['params']->value['lib_mag'];?>
</TD>
								<TD> <?php echo $_smarty_tpl->tpl_vars['params']->value['lib_profil'];?>
 </TD>						
							</TR> 
						<?php } ?>
					
					<?php }?>
					

				</TABLE> 
				<input id="selectionner" type="submit" value="Selectionner"/>
				</form>
			</div><?php }} ?>
