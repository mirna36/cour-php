<?php
	session_start();
	$taille = sizeof($_SESSION['panier']);

	foreach ($_SESSION['panier'] as $lignePanier) {
		echo $lignePanier['dateCreation'] . "\t " . $lignePanier['nomMonument'] . "\t " . $lignePanier['idMonument'] . "<br>";
	
		$quantite = $_SESSION['panier'][$taille]['idMonument'] + 1;

	}
	

	
?>