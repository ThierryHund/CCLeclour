<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 22:35:15
         compiled from "templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308485367d1620d8336-26820094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc8f3f35bda0ae81fabee63380dca27ba24a996' => 
    array (
      0 => 'templates\\connexion.tpl',
      1 => 1399314740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308485367d1620d8336-26820094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5367d1621181a7_78757687',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5367d1621181a7_78757687')) {function content_5367d1621181a7_78757687($_smarty_tpl) {?>	<h1>Connexion</h1>
	<div class="centre">
		<form id="connexion" method="post" action="index.php">
			<label for="login">Login :</label>
			<input type="text" name="login" autofocus></br>
			<label for="pswd">Password :</label>
			<input type="password" name="pswd"></br>
			<input type="submit" value="Connexion" />
		</form>
	</div><?php }} ?>
