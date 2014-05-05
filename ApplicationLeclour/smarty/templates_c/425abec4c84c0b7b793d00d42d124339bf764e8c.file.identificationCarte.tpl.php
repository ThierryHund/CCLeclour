<?php /* Smarty version Smarty-3.1.17, created on 2014-05-05 21:45:23
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\personnelAccueil\identificationCarte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253925366cc845d5945-12512963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '425abec4c84c0b7b793d00d42d124339bf764e8c' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\personnelAccueil\\identificationCarte.tpl',
      1 => 1399326252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253925366cc845d5945-12512963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5366cc845dab49_48304774',
  'variables' => 
  array (
    'numero' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366cc845dab49_48304774')) {function content_5366cc845dab49_48304774($_smarty_tpl) {?>			<H1>Service de secours</H1>
				
			<div class="centre">
				<form id="rechercheNumAleatoire" action="././controleurs/personnelAccueil/identificationCarte.php">
					<label for="numAleatoire" >Code barre :</label> 
					<input type="text" id="numAleatoire"/><br/>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
				<form id="rechercheNumSere" action="">
					<label for="numAleatoire" >Code barre :</label> 
					<input type="text" id="numAleatoire"/><br/>
					<label for="numSerie" >Numéro de série :</label> 
					<input type="text" id="numSerie"/><br/>
					<br/>
					<input type="submit" value="Valider"/>
				</form>
				<?php if (($_smarty_tpl->tpl_vars['numero']->value!=null)) {?>
					Le numero saisi est <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
	
				<?php }?>
			</div><?php }} ?>
