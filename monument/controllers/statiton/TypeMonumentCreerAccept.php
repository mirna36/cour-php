<?php

	require_once("../../model/typemonument/typemonumentModel.php");
	  session_start();

	 
	
    $libelle = trim($_POST['libelle']);
    
     //controler si libelle est vide
	
	typeMonument_Insert($libelle);
	
		Header("Location: ../../views/typemonument/ListerTypeMonument.php");
	
?>