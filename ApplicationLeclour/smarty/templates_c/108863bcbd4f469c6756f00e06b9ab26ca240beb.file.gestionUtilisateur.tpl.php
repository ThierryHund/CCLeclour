<?php /* Smarty version Smarty-3.1.18, created on 2014-05-07 21:13:07
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\gestionUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237845368045173f906-91246166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '108863bcbd4f469c6756f00e06b9ab26ca240beb' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\gestionUtilisateur.tpl',
      1 => 1399497184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237845368045173f906-91246166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5368045181fec2_89555913',
  'variables' => 
  array (
    'parameters' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368045181fec2_89555913')) {function content_5368045181fec2_89555913($_smarty_tpl) {?>			<H1>Gestion des utilisateurs</H1>
			<div>
				<form action="gestionUtilisateur.html">
				<input type="text" id="nom" value="nom"/>
				<input type="text" id="prenom" value="prenom"/>
				<input type="text" id="login" value="login"/>
				
      			<select name="entite" id="entite">
				<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['magasins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
					<option VALUE=<?php echo $_smarty_tpl->tpl_vars['params']->value[0];?>
><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
</option>
				<?php } ?> 
				</select>
				
      			<select name="profil" id="profil">
				<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value['groupes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
?>
					<option VALUE=<?php echo $_smarty_tpl->tpl_vars['params']->value[0];?>
><?php echo $_smarty_tpl->tpl_vars['params']->value[1];?>
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
					<form id="radioSelectionUtilisateur" action="gestionUtilisateur_Select.html">
					<TR> 
						<TD style=" border:0;" ><input type="radio" value="idUtilisateur" name="selectionUtilisateur"></TD>
						<TD> Dupont </TD> 
						<TD> Pierre </TD> 
						<TD> Dupont46 </TD> 
						<TD> Leclour Informatique </TD>
						<TD> Chef de caisse </TD>						
					</TR> 
					<TR> 
						<TD style=" border:0;"><input type="radio" value="idUtilisateur" name="selectionUtilisateur"></TD>
						<TD> Boubel </TD> 
						<TD> Maxime </TD> 
						<TD> Boubel01 </TD> 
						<TD> Leclour Informatique </TD>
						<TD> Administrateur </TD>						
					</TR> 
					<TR> 
						<TD style=" border:0;"><input type="radio" value="idUtilisateur" name="selectionUtilisateur"></TD>
						<TD> Poulet </TD> 
						<TD> Philipe </TD> 
						<TD> PouletGrillé </TD> 
						<TD> Metz Technopole </TD>
						<TD> Comptable </TD>						
					</TR> 
					<TR> 
						<TD style=" border:0;"><input type="radio" value="idUtilisateur" name="selectionUtilisateur"></TD>
						<TD> Poulet </TD> 
						<TD> Cindy </TD> 
						<TD> PouletFumé </TD> 
						<TD> Metz Mondelange </TD>
						<TD> Personnel d'accueil </TD>						
					</TR> 
				</TABLE> 
				<input id="selectionner" type="submit" value="Selectionner"/>
				</form>
			</div><?php }} ?>
