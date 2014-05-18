<?php
$transactions = Transaction::rechercheIdCarte ( $_POST ['idCarte'] );
$smarty->assign ( 'transactions', $transactions );
$smarty->assign ( 'idCarte', $_POST ['idCarte'] );
?>