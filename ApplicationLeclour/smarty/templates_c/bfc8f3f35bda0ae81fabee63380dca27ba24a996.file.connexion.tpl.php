<?php /* Smarty version Smarty-3.1.17, created on 2014-05-03 19:13:54
         compiled from "templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9505365110545da10-96237907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc8f3f35bda0ae81fabee63380dca27ba24a996' => 
    array (
      0 => 'templates\\connexion.tpl',
      1 => 1399144393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9505365110545da10-96237907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53651105460916_28275227',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53651105460916_28275227')) {function content_53651105460916_28275227($_smarty_tpl) {?><div class="contenu">
	<h1>Connexion</h1>
	<div class="centre">
		<form id="connexion" method="post" action="index.php">
			<label for="login">Login :</label>
			<input type="text" name="login" autofocus></br>
			<label for="pswd">Password :</label>
			<input type="password" name="pswd"></br>
			<input type="submit" value="Connexion" />
		</form>
	</div>
</div><?php }} ?>
