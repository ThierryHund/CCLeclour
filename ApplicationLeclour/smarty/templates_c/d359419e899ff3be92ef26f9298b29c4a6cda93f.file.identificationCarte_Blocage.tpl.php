<?php /* Smarty version Smarty-3.1.17, created on 2014-05-08 00:12:35
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\personnelAccueil\identificationCarte_Blocage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6964536ac532335e38-03255739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd359419e899ff3be92ef26f9298b29c4a6cda93f' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\personnelAccueil\\identificationCarte_Blocage.tpl',
      1 => 1399507953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6964536ac532335e38-03255739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536ac5323a8395_48154444',
  'variables' => 
  array (
    'carte' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536ac5323a8395_48154444')) {function content_536ac5323a8395_48154444($_smarty_tpl) {?><H1>Service de secours</H1>
	<div class="centre">
	<?php if (($_smarty_tpl->tpl_vars['carte']->value->getBlocage()==0)) {?>
	Cette carte n'est pas bloquée.</br> Si vous souhaitez bloquer cette carte cliquez sur le bouton "Bloquer" ci dessous</br></br>
	<form action="././index.php?section=personnelAccueil&page=identificationCarte_Blocage" method="post">
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carte']->value->getIdCarte();?>
" name="idCarte">
	<input type="hidden" name="blocage" value="1">
	<input type="submit" value="Bloquer">
	</form>
	<?php } else { ?>
	Cette carte est bloquée.</br> Si vous souhaitez débloquer cette carte cliquez sur le bouton "Debloquer" ci dessous</br></br>
	<form action="././index.php?section=personnelAccueil&page=identificationCarte_Blocage" method="post">
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carte']->value->getIdCarte();?>
" name="idCarte">
	<input type="hidden" name="blocage" value="0">
	<input type="submit" value="Debloquer">
	</form>
	<?php }?>
	</br>
	<form action='././index.php?section=personnelAccueil&page=identificationCarte_Select' method='post'>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carte']->value->getIdCarte();?>
" name="idCarte">
		<input type="submit" value="Retour"/>
	</form>	
	</div><?php }} ?>
