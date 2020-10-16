<?php
session_start();
$_SESSION['panier'] = array();
header("Location: controllers/monument/IndexListerMonumentAccept.php");
?>