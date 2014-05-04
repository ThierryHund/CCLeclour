<?php /* Smarty version Smarty-3.1.18, created on 2014-05-03 13:08:00
         compiled from "templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290275364e90ccd1e51-70655853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc8f3f35bda0ae81fabee63380dca27ba24a996' => 
    array (
      0 => 'templates\\connexion.tpl',
      1 => 1399122282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290275364e90ccd1e51-70655853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5364e90d07b051_63293067',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5364e90d07b051_63293067')) {function content_5364e90d07b051_63293067($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
  <head>
    <title>Gestion d'usagers : Connexion</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  </head>

  <body class="homepage">
  

	  <h2>Connexion</h2>

  
	<form method="post" action="liste.usager.php?key=liste">
    <fieldset>
		<legend>Connexion</legend>
	   
		<label for="login">Login</label>
		<input type="text" name="login" autofocus></br>
		
		<label for="pswd">Password</label>
		<input type="password" name="pswd"></br>
	   
		</fieldset>   
	<input type="submit" value="Envoyer" />
  </body>
</html><?php }} ?>
