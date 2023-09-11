<?php
	include_once 'C:\xampp\htdocs\Sarra_Avis\Controller\AvisC.php';
	$avisc=new AvisC();
	$avisc->supprimeravis($_GET["id"]);
	header('Location:forms_A.php');
?>