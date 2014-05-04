<?php /* Smarty version Smarty-3.1.17, created on 2014-05-04 23:26:02
         compiled from "C:\wamp\www\\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\parametrageTarif.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261705366cc8a846609-87840059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ee9b5fdc2d153c200ce1f53533dec864acd3200' => 
    array (
      0 => 'C:\\wamp\\www\\\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\parametrageTarif.tpl',
      1 => 1399245893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261705366cc8a846609-87840059',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5366cc8a886cf3_88435899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366cc8a886cf3_88435899')) {function content_5366cc8a886cf3_88435899($_smarty_tpl) {?>		<div class="contenu">

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
		</div><?php }} ?>
