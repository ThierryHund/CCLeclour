<?php /* Smarty version Smarty-3.1.17, created on 2014-05-07 14:28:21
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\personnelAccueil\identificationCarte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253925366cc845d5945-12512963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '425abec4c84c0b7b793d00d42d124339bf764e8c' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\personnelAccueil\\identificationCarte.tpl',
      1 => 1399408484,
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
    'recherche' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366cc845dab49_48304774')) {function content_5366cc845dab49_48304774($_smarty_tpl) {?>			<H1>Service de secours</H1>
			<div class="centre">
			<H2>Recherche carte</H2>
				<form id="choixNumero" action="././index.php?section=personnelAccueil&page=identificationCarte" method="post">
					<input type="radio" name="choix" value="alea" onchange="submit(this.form)">Code barre <br>
					<input type="radio" name="choix" value="serie" onchange="submit(this.form)">Numéro de série
				</form>
				<?php if (($_smarty_tpl->tpl_vars['recherche']->value=='alea')) {?>
					<form id="rechercheNumAleatoire" action="././index.php?section=personnelAccueil&page=identificationCarte_Select" method="post">
					<label for="numAleatoire" >Code barre :</label> 
					<input type="text" id="numAleatoire" name="numAleatoire"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>
				<?php } elseif (($_smarty_tpl->tpl_vars['recherche']->value=='serie')) {?>
					<form id="rechercheNumSere" action="././index.php?section=personnelAccueil&page=identificationCarte_Select" method="post">
					<label for="numSerie" >Numéro de série :</label> 
					<input type="text" id="numSerie" name="numSerie"/><br/>
					<input type="submit" value="Rechercher"/>
				</form>				
				<?php }?>
			</div><?php }} ?>
