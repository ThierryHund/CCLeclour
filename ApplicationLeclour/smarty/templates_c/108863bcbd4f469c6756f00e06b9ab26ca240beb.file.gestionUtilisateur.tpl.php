<?php /* Smarty version Smarty-3.1.18, created on 2014-05-04 17:17:00
         compiled from "C:\wamp\www\webprojet\CCLeclour\ApplicationLeclour\templates\administrateur\gestionUtilisateur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239175366760ca3c675-02279009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '108863bcbd4f469c6756f00e06b9ab26ca240beb' => 
    array (
      0 => 'C:\\wamp\\www\\webprojet\\CCLeclour\\ApplicationLeclour\\templates\\administrateur\\gestionUtilisateur.tpl',
      1 => 1399198220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239175366760ca3c675-02279009',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5366760cad5366_35046122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366760cad5366_35046122')) {function content_5366760cad5366_35046122($_smarty_tpl) {?><html>
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
