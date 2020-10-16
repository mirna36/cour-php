<?php
require_once("../../model/connexion.php");



                                          //FONCTION POUR RECHERCHER ID


function typeMonument_find($id){
      
    $vid = $id;
    

      // prepare requête sql PREPARE LE PLACE POUR LES DONNEES
  $reqsql = "select * from type_monument where ID_TYPE_Monument = :vid";

  //Initialisation de $stypemonumenttrouve
  $typemonumenttrouve = array(); 
  
    try{
        //ETABLIT LA CONNEXION
      $cnx = connect_db();
      $stmt=$cnx->prepare($reqsql);
                      
      // bind parameters POUR ENVOYER LES DONNEES
      $stmt->bindParam(':vid',$vid, PDO::PARAM_INT);
      
      //exécution
      
      $stmt->execute();
      $typemonumenttrouve = $stmt->fetch();
      
      

      //fermeture du curseur POUR VIDER LA ZONE POUR QUE D AUTRES DONNEES SOIENT SAISIE
      $stmt->closeCursor();

      
      
  } catch(PDOException $error){
      $message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
      $_SESSION['message_erreur'] = $message_erreur;
      Header("Location: PageErreur.php" );
  }
  /* FERMER LA CONNECTION */
  $cnx = null;
  return $typemonumenttrouve;
  }


                                                     //FONCTION POUR INSERER LES DONNEES


  function typeMonument_Insert($libelle){

    $libelle = trim($_POST['libelle']);

	// sécurisation des données
	$vLibelle = filter_var($libelle, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$vTypeMonumentId = '0';
	echo $vLibelle . "<br>";

	// prepare requête sql PREPARE LE PLACE POUR LES DONNEES
	$reqSql = "insert into type_monument values (:vTypeMonumentId, :vLibelle)";

	try{
		$cnx = connect_db();
		$stmt=$cnx->prepare($reqSql);
						
		// bind parameters POUR ENVOYER LES DONNEES
		$stmt->bindParam(':vTypeMonumentId', $vTypeMonumentId, PDO::PARAM_INT);
		$stmt->bindParam(':vLibelle', $vLibelle, PDO::PARAM_STR);
		
		//exécution
		$stmt->execute();

		//fermeture du curseur POUR VIDER LA ZONE POUR QUE D AUTRES DONNEES SOIENT SAISIE
		$stmt->closeCursor();

		echo "Création réussie";
		
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: PageErreur.php" );
	}
	/* FERMER LA CONNECTION */
	$cnx = null;
  }



                                                   //FONCTON DE MODIFIER

  function typeMonument_Update($id, $libelle){
   
	// sécurisation des données
	$vLibelle = filter_var($libelle, FILTER_SANITIZE_FULL_SPECIAL_CHARS);


	// prepare requête sql PREPARE LE PLACE POUR LES DONNEES
	$reqSql = "UPDATE type_monument SET Libelle_TYPE_Monument = :vLibelle WHERE ID_TYPE_Monument= :vTypeMonumentId";

	try{
		$cnx = connect_db();
		$stmt=$cnx->prepare($reqSql);
						
		// bind parameters POUR ENVOYER LES DONNEES
		$stmt->bindParam(':vTypeMonumentId', $vTypeMonumentId, PDO::PARAM_INT);
		$stmt->bindParam(':vLibelle', $vLibelle, PDO::PARAM_STR);
		
		//exécution
		$stmt->execute();

		//fermeture du curseur POUR VIDER LA ZONE POUR QUE D AUTRES DONNEES SOIENT SAISIE
		$stmt->closeCursor();
 
		
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: PageErreur.php" );
	}
  /* FERMER LA CONNECTION */
  
  $cnx = null;
}


  
                                                    //FONCTION SUPPRIMER

  function typeMonument_Delete($id){

    $vTypeMonumentId = $id;
	
	// prepare requête sql PREPARE LE PLACE POUR LES DONNEES
	$reqSql = "DELETE FROM type_monument  WHERE ID_TYPE_Monument= :vTypeMonumentId";

	try{
		$cnx = connect_db();
		$stmt=$cnx->prepare($reqSql);
						
		// bind parameters POUR ENVOYER LES DONNEES
		$stmt->bindParam(':vTypeMonumentId', $vTypeMonumentId, PDO::PARAM_INT);
	
		
		//exécution
		$stmt->execute();

		//fermeture du curseur POUR VIDER LA ZONE POUR QUE D AUTRES DONNEES SOIENT SAISIE
		$stmt->closeCursor();

		
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: PageErreur.php" );
	}
	/* FERMER LA CONNECTION */
	$cnx = null;

  }

 //TOUT AFFICHER

//Préparartion de la requete d'extraction de tous les enregistrements

function typeMonument_findAll(){
	$reqSql = "Select * from type_monument";
	//connexion à la base de donnée
	$cnx = connect_db();
	$listeTypeMonument = array();
	try{
		$cnx = connect_db();
		$stmt=$cnx->prepare($reqSql);                    
	
		//exécution
		$cnx->query($reqSql);
		$stmt->execute();
	
		$listeTypeMonument = $stmt->fetchAll();
	
		//fermeture du curseur POUR VIDER LA ZONE POUR QUE D AUTRES DONNEES SOIENT SAISIE
		$stmt->closeCursor();
	
	
		
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: PageErreur.php" );
	}
	//FERMER LA CONNEXION
	$cnx = null;
	/* print_r($listeTypeMonument); */
	return $listeTypeMonument;
	}

  
	
?>