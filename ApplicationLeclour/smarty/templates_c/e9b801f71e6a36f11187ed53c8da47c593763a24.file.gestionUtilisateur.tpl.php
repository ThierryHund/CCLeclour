<?php /* Smarty version Smarty-3.1.17, created on 2014-05-03 20:57:57
         compiled from "C:\wamp\www\CCLeclour\ApplicationLeclour\templates\administrateur\gestionUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12750536558550df341-82868525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9b801f71e6a36f11187ed53c8da47c593763a24' => 
    array (
      0 => 'C:\\wamp\\www\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\gestionUtilisateur.tpl',
      1 => 1399129555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12750536558550df341-82868525',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53655855199169_52570142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53655855199169_52570142')) {function content_53655855199169_52570142($_smarty_tpl) {?><html>
	<head>
	<link rel="stylesheet" href="../../css/MainStyleSheet.css">
	</head>
	
	<body>
		<div>

			<H1>Gestion des utilisateurs</H1>
			<div>
				<form id="formulaire" action="gestionUtilisateur.html">
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
				<TABLE BORDER="1" style=" width:60%;"> 
					 
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
			</div>
		</div>
	</body>

</html><?php }} ?>
