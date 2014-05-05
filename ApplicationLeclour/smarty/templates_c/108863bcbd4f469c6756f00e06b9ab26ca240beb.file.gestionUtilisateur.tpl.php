<?php /* Smarty version Smarty-3.1.18, created on 2014-05-05 21:36:17
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\gestionUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237845368045173f906-91246166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '108863bcbd4f469c6756f00e06b9ab26ca240beb' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\gestionUtilisateur.tpl',
      1 => 1399245562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237845368045173f906-91246166',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5368045181fec2_89555913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5368045181fec2_89555913')) {function content_5368045181fec2_89555913($_smarty_tpl) {?>			<H1>Gestion des utilisateurs</H1>
			<div>
				<form action="gestionUtilisateur.html">
				<input type="text" id="nom" value="nom"/>
				<input type="text" id="prenom" value="prenom"/>
				<input type="text" id="login" value="login"/>
				<select id="age">
					<option>Leclour Informatique</option>
					<option>Technopole</option>
				</select>
				<select id="age">
					<option>Personnel d'accueil</option>
					<option>Chef de caisse</option>
				</select></br>
				<input id="rechercher" type="submit" value="Rechercher"/>
				</form>
			</div>
			<div>
				<TABLE BORDER="1" style=" width:90%;"> 
					 
					<TR>
						<TH></TH>
						<TH> Nom </TH> 
						<TH> Prenom </TH> 
						<TH> Login </TH> 
						<TH> Entité de rattachement </TH>
						<TH> Profil </TH>						
					</TR> 
					<form id="radioSelectionUtilisateur" action="gestionUtilisateur_Select.html">
					<TR> 
						<TD style=" border:0;" ><input type="radio" value="idUtilisateur" name="selectionUtilisateur"></TD>
						<TD> Dupont </TD> 
						<TD> Pierre </TD> 
						<TD> Dupont46 </TD> 
						<TD> Leclour Informatique </TD>
						<TD> Chef de caisse </TD>						
					</TR> 
					<TR> 
						<TD style=" border:0;"><input type="radio" value="idUtilisateur" name="selectionUtilisateur"></TD>
						<TD> Boubel </TD> 
						<TD> Maxime </TD> 
						<TD> Boubel01 </TD> 
						<TD> Leclour Informatique </TD>
						<TD> Administrateur </TD>						
					</TR> 
					<TR> 
						<TD style=" border:0;"><input type="radio" value="idUtilisateur" name="selectionUtilisateur"></TD>
						<TD> Poulet </TD> 
						<TD> Philipe </TD> 
						<TD> PouletGrillé </TD> 
						<TD> Metz Technopole </TD>
						<TD> Comptable </TD>						
					</TR> 
					<TR> 
						<TD style=" border:0;"><input type="radio" value="idUtilisateur" name="selectionUtilisateur"></TD>
						<TD> Poulet </TD> 
						<TD> Cindy </TD> 
						<TD> PouletFumé </TD> 
						<TD> Metz Mondelange </TD>
						<TD> Personnel d'accueil </TD>						
					</TR> 
				</TABLE> 
				<input id="selectionner" type="submit" value="Selectionner"/>
				</form>
			</div><?php }} ?>
