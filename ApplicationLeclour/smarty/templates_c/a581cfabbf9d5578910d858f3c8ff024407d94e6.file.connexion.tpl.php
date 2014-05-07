<?php /* Smarty version Smarty-3.1.17, created on 2014-05-07 14:17:48
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15115536a408ccf7c83-55002393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a581cfabbf9d5578910d858f3c8ff024407d94e6' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\connexion.tpl',
      1 => 1399312601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15115536a408ccf7c83-55002393',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536a408ccfb6b0_10684072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536a408ccfb6b0_10684072')) {function content_536a408ccfb6b0_10684072($_smarty_tpl) {?>	<h1>Connexion</h1>
	<div class="centre">
		<form id="connexion" method="post" action="index.php">
			<label for="login">Login :</label>
			<input type="text" name="login" autofocus></br>
			<label for="pswd">Password :</label>
			<input type="password" name="pswd"></br>
			<input type="submit" value="Connexion" />
		</form>
	</div><?php }} ?>
