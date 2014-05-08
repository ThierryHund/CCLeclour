<?php /* Smarty version Smarty-3.1.17, created on 2014-05-08 00:09:55
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\personnelAccueil\identificationCarte_Transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27718536ab232485e65-53613020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '956e24abce57c4bcd93f7051d22e574e493198ad' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\personnelAccueil\\identificationCarte_Transactions.tpl',
      1 => 1399507792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27718536ab232485e65-53613020',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536ab23259d212_96534785',
  'variables' => 
  array (
    'transactions' => 0,
    'transaction' => 0,
    'idCarte' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536ab23259d212_96534785')) {function content_536ab23259d212_96534785($_smarty_tpl) {?><H1>Service de secours</H1>
<H2>Transactions</H2>
	<div class="centre">
	<table>
		<tr>
		<th>Id transaction</th>
		<th>Libellé transaction</th>
		<th>Date transaction</th>
		<th>Heure transaction</th>
		<th>Id utilisateur</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['transaction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['transaction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transactions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->key => $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->getIdTransac();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->getLibTransac();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->getDateTransac();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->getHeureTransac();?>
</td>	
			<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->getIdUtilisateur();?>
</td>
		</tr>
		<?php } ?>
	</table>
	</br></br>
	<form action='././index.php?section=personnelAccueil&page=identificationCarte_Select' method='post'>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idCarte']->value;?>
" name="idCarte">
		<input type="submit" value="Retour"/>
	</form>	
	</div><?php }} ?>
