<?php


	require_once("../../models/utilisateur/UtilisateurModel.php");
	session_start();

	//récupération de l'id de type monument à chercher
	$id = $_GET['idUtilisateur'];
	$traitement = $_GET['traitement'];

	$_SESSION['idUtilisateur'] = $id;
	//récupération du monument
	$utilisateur= utilisateur_find( $id );
	
	//on passe $Monument en variable de session
	$_SESSION['utilisateurt'] = $utilisateur;
	
	if ( $traitement == 1 ) {
		Header("Location: ../../views/monument/frmMonumentVoir.php");
	} else {
		if ( $traitement == 2 ) {
			Header("Location: ../../views/monument/frmMonumentModifier.php");
		}else {
		if ($traitement == 3){
			Header("Location: ../../views/monument/frmMonumentSupprimer.php");
			}else{ 
				if($traitement == 4){
			Header("Location: ../../views/monument/frmMonumentTelecharger.php");
				}
			}
		}
	}	
			
		
?>