<?php
	
	session_start();
	session_destroy();
	
	Header("Location: monument/authentification.php");
	
	
?>