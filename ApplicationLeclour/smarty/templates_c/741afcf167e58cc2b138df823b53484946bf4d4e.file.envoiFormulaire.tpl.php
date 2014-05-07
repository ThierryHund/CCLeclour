<?php /* Smarty version Smarty-3.1.17, created on 2014-05-07 14:28:27
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\comptable\envoiFormulaire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43955366d604b7cef6-07987380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '741afcf167e58cc2b138df823b53484946bf4d4e' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\comptable\\envoiFormulaire.tpl',
      1 => 1399470970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43955366d604b7cef6-07987380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5366d604b7e4b9_85342437',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366d604b7e4b9_85342437')) {function content_5366d604b7e4b9_85342437($_smarty_tpl) {?>
	
			<H1>Envoi du Formulaire</H1>
			<div>
				<form id="formulaire" action="envoiFormulaire.html">
					<label for="mail" >Adresse du contact :</label> 
					<input type="hidden" id="mail" /><br/>
					</br>
					<input type="submit" value="OK"/>
			</div>
		
<?php }} ?>
