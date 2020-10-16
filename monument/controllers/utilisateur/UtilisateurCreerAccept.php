<?php

	require_once("../../models/utilisateur/UtilisateurModel.php");
	session_start();
	
	$email = trim($_POST['email']);
	$mdp = trim($_POST['mdp']);
	$user_type= trim($_POST['user_type']);
	
	
	$_SESSION['email'] = $email;
	$_SESSION['mdp'] = $mdp;
	$_SESSION['user_type'] = $user_type;
	
	
	$_SESSION['msg_erreur'] = "";
	
	//controle avant insertion
	if ( empty($email)) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email non renseigné<br>";
	
	} else {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email Invalide";			
		}
	}
	if ( empty($mdp) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Mot de passe non renseignée<br>";
	}
	if ( empty($_SESSION['msg_erreur'] )) {
		
		utilisateur_Insert( $email, password_hash($mdp,PASSWORD_DEFAULT), $user_type);
	}
		
		
	Header("Location: ../../views/utilisateur/frmUtilisateurCreer.php");				
	
?>