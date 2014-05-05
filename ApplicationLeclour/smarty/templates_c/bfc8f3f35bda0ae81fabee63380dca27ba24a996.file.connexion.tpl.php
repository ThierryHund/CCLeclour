<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 20:33:17
         compiled from "templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184175367f58d630961-26125129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '184175367f58d630961-26125129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5367f58d75bc15_60283658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5367f58d75bc15_60283658')) {function content_5367f58d75bc15_60283658($_smarty_tpl) {?>	<h1>Connexion</h1>
	<div class="centre">
		<form id="connexion" method="post" action="index.php">
			<label for="login">Login :</label>
			<input type="text" name="login" autofocus></br>
			<label for="pswd">Password :</label>
			<input type="password" name="pswd"></br>
			<input type="submit" value="Connexion" />
		</form>
	</div><?php }} ?>
