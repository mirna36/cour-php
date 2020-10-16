<?php
	session_start();
	require_once("../../models/monument/monumentModel.php");
	$_SESSION['listeMonument'] = monument_findAll();
	
	Header("Location: ../../views/monument/IndexListerMonument.php");
?>