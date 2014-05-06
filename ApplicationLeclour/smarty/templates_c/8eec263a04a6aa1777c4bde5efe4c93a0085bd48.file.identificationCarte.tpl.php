<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 21:38:41
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\personnelAccueil\identificationCarte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31293536804e1b5afb8-79839377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eec263a04a6aa1777c4bde5efe4c93a0085bd48' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\personnelAccueil\\identificationCarte.tpl',
      1 => 1399282239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31293536804e1b5afb8-79839377',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536804e1c30712_38063933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536804e1c30712_38063933')) {function content_536804e1c30712_38063933($_smarty_tpl) {?>			<H1>Service de secours</H1>
				
			<div class="centre">
				<form id="rechercheCarte" action="">
					<label for="numAleatoire" >Code barre :</label> 
					<input type="text" id="numAleatoire"/><br/>
					<label for="numSerie" >Numéro de série :</label> 
					<input type="text" id="numSerie"/><br/>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
			</div><?php }} ?>
