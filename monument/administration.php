<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>Monuments de Paris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Ajout de Bootstrap à partir du CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	

	<!--Ajout de W3.CSS à partir du CDN-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<!--Pour utiliser les icônes Font Awesome avec Bootstrap 4 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!--Fichier CSS de la page-->
	<link rel="stylesheet" href="/css/main.css" />

	<?php 
 	session_start();
		if(isset($_SESSION['user_Ok'])){
			if($_SESSION['user_Ok']['type_utilisateur'] !="ADM"){

			Header("Location: views/utilisateur/frmLogin.php");
		}else{
			Header("Location: /monument/authentification.php");

		}
	} 
	?>

</head>
<body>
<div class="w3-container w3-black">
		<h1>Administration</h1>
	
<ul class="nav justify-content-end">
  
  <li class="nav-item">
	<p>
		<a href="/monument/authentification">
  		<button type="submit" class="w3-btn w3-teal w3-round-large w3-hover-green w3-medium"><i class="fa fa-check" ></i>&nbsp;&nbsp; Se connecter</button>
	</p>
</li>
</ul>
</div>
<br>
<br>
	<div id="admoption" style = "texte-align:center">
	<p>
		<a href="controllers/typemonument/TypeMonumentListerAccept.php"><button>Type monument</button></a>
	</p>
	<p>
		<a href="controllers/monument/MonumentListerAccept.php"><button>Monument</button></a>
	</p>
	<p>
		<a href="controllers/utilisateur/UtilisateurListerAccept.php"><button>utilisateur</button></a>
	</p>

	</div>
	
</body>
</html>