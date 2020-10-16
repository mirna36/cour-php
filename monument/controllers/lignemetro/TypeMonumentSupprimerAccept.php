<?php

	require_once("../../model/typemonument/typemonumentModel.php");
	  session_start();

	 
	
	  $vid = $id;
    
     //controler si libelle est vide
	typeMonument_Delete($id);
	
		Header("Location:../../views/typemonument/ListerTypeMonument.php");
	
?>