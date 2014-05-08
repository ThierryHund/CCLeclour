<?php /* Smarty version Smarty-3.1.17, created on 2014-05-08 00:16:10
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\personnelAccueil\identificationCarte_Select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21447536a46ccdf5ec9-16906983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b101664203bba7937e360d872f0b7f5946e5d2de' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\personnelAccueil\\identificationCarte_Select.tpl',
      1 => 1399508163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21447536a46ccdf5ec9-16906983',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536a46cce56968_05261030',
  'variables' => 
  array (
    'carte' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536a46cce56968_05261030')) {function content_536a46cce56968_05261030($_smarty_tpl) {?><H1>Service de secours</H1>
	<div class="centre">
	<?php if (($_smarty_tpl->tpl_vars['carte']->value->getIdCarte()!=null)) {?>
	Id de la carte : <?php echo $_smarty_tpl->tpl_vars['carte']->value->getIdCarte();?>
 </br>
	Code barre : <?php echo $_smarty_tpl->tpl_vars['carte']->value->getNumAleatoire();?>
 </br>
	Numéro de série : <?php echo $_smarty_tpl->tpl_vars['carte']->value->getNumSerie();?>
 </br>
	Indice de blocage : <?php echo $_smarty_tpl->tpl_vars['carte']->value->affichageBlocage();?>
 </br>
	Solde : <?php echo $_smarty_tpl->tpl_vars['carte']->value->getSolde();?>
€ </br>
	Type de carte : <?php echo $_smarty_tpl->tpl_vars['carte']->value->getIdTypeCarte();?>
 </br>
	Id de sur-personnalisation : <?php echo $_smarty_tpl->tpl_vars['carte']->value->getIdSurperso();?>
 </br></br>
	Outils :</br>
	<form class='lien' action='././index.php?section=personnelAccueil&page=identificationCarte_Transactions' method='post'>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carte']->value->getIdCarte();?>
" name="idCarte">
		<input type="submit" value="Consulter transactions"/>
	</form>	
	<form class='lien' action='././index.php?section=personnelAccueil&page=identificationCarte_Blocage' method='post'>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carte']->value->getIdCarte();?>
" name="idCarte">
		<input type="submit" value="Blocage/Deblocage"/>
	</form>	
	<?php } else { ?>
	
	Carte non trouvée !
	<?php }?>
	</br></br>
	<form action='././index.php?' method='get'>
		<input type="hidden" value="personnelAccueil" name="section">
		<input type="hidden" value="identificationCarte" name="page">
		<input type="submit" value="Retour"/>
	</form>	
	
	</div><?php }} ?>
