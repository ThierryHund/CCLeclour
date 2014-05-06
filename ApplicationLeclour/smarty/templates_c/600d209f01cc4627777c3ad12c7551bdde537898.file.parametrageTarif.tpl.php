<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 21:36:18
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\parametrageTarif.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2841753680452b4f1b9-32262097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '600d209f01cc4627777c3ad12c7551bdde537898' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\parametrageTarif.tpl',
      1 => 1399282239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2841753680452b4f1b9-32262097',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53680452c54a64_74527482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53680452c54a64_74527482')) {function content_53680452c54a64_74527482($_smarty_tpl) {?>

			<H1>Paramètrage des tarifs</H1>
				
			<div class="centre">
				<form id="parametrageTarif" action="">
					<label for="dateDebut" >Date de début (JJ/MM/AAAA)</label> 
					<input type="text" id="dateDebut"/><br/>
					<label for="dateFin" >Date de fin (JJ/MM/AAAA)</label> 
					<input type="text" id="dateFin"/><br/>
					<label for="nbPlages" >Nombre de plages</label> 
					<input type="text" id="nbPlages"/><br/>
					<input type="submit" value="Valider"/>
				</form>
				</br>
				</br>
				<form id="formulaire" action="">
					<input type="text" id="nbMin" value="Nb carte minimum"/>
					<input type="text" id="nbMax"value="Nb carte maximum"/>
					<input type="text" id="prix" value="prix de l'activation"/></br>
					
					<input type="text" id="nbMin" value="Nb carte minimum"/>
					<input type="text" id="nbMax"value="Nb carte maximum"/>
					<input type="text" id="prix" value="prix de l'activation"/></br>
					
					<input type="text" id="nbMin" value="Nb carte minimum"/>
					<input type="text" id="nbMax"value="Nb carte maximum"/>
					<input type="text" id="prix" value="prix de l'activation"/></br>
					<input type="submit" value="Valider"/>
				</form>
			</div>
<?php }} ?>
