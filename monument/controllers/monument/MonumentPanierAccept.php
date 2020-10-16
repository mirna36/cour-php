<?php
	
	session_start();
	
	$dateCreation = $_GET['dateCreation'];
	$nomMonument = $_GET['nomMonument'];
	$idMonument = $_GET['idMonument'];
	
	$taille = sizeof($_SESSION['panier']);
	
	$_SESSION['panier'][$taille]['dateCreation'] = $dateCreation;
	$_SESSION['panier'][$taille]['nomMonument'] = $nomMonument;
	$_SESSION['panier'][$taille]['idMonument'] = $idMonument;

	


	
	header("Location: IndexListerMonumentAccept.php");
	
?>