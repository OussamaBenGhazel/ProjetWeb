<?php
	include_once 'C:\xampp\htdocs\Sarra_Reclamation\Controller\ReclamationC.php';
	$reclamationc=new ReclamationC();
	$reclamationc->supprimerreclamation($_GET["id"]);
	header('Location:tables_A.php');
?>