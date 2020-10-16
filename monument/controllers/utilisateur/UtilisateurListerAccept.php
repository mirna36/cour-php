<?php
	
	require_once("../../models/utilisateur/UtilisateurModel.php");
	session_start();
	
	//$_SESSION['listeUtilisateur'] = utilisateur_findAll();
	$_SESSION['utilisateur'] = user_findByEmail($_SESSION['user_ok']['email_utilisateur']);
	
	
	Header("Location: ../../views/utilisateur/ListerUtilisateur.php");
	
?>