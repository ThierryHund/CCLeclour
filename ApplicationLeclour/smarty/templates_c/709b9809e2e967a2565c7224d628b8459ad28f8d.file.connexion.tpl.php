<?php /* Smarty version Smarty-3.1.18, created on 2014-05-08 21:07:53
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24436536bf229849663-38923803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '709b9809e2e967a2565c7224d628b8459ad28f8d' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\connexion.tpl',
      1 => 1399314740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24436536bf229849663-38923803',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536bf229850198_09430018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536bf229850198_09430018')) {function content_536bf229850198_09430018($_smarty_tpl) {?>	<h1>Connexion</h1>
	<div class="centre">
		<form id="connexion" method="post" action="index.php">
			<label for="login">Login :</label>
			<input type="text" name="login" autofocus></br>
			<label for="pswd">Password :</label>
			<input type="password" name="pswd"></br>
			<input type="submit" value="Connexion" />
		</form>
	</div><?php }} ?>
