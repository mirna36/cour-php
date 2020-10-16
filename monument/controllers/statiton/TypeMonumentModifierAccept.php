<?php

	require_once("../../model/typemonument/typemonumentModel.php");
	  session_start();

	 
	
    $libelle = trim($_POST['libelle']);
    $vid = $id;
    
    
     //controler si libelle est vide
 
     typeMonument_Update($id, $libelle);
	
		Header("Location: ../../views/typement/ListerTypeMonument.php");
	
?>