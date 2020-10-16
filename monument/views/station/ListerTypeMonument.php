<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=L, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php
    session_start();

    $listeTypemonument = $_SESSION['listeTypemonument'];
    ?>
    <title>Liste des types monuments</title>
</head>
<body style = "margin: 200px;">

<h1 class ="text-center">Liste des types monument</h1>
<table class= "table" border="1px" style = "text-align:center">
  <thead class="thead-dark">
 
    <tr>
      <th>Libellée</th>
      <th>Actions</th>
     
    </tr>
  </thead>
  <tbody>
  <?php foreach($listeTypemonument as $ligne){?>
      
    <tr>
      <td><?php echo $ligne['Libelle_TYPE_Monument'];?></td>
      <td><a href="../../controller/formTypeMonumentVoir.php?id=<?php echo $ligne['ID_TYPE_Monument']?>">Voir</a> <a href="TypeMonumentChercher.php?id=<?php echo $ligne['ID_TYPE_Monument']?>">modifier</a> <a href="TypeMonumentSupprimer.php?id=<?php echo $ligne['ID_TYPE_Monument']?>">supprimer</a></td>
      
    </tr>
    <?php
  }
  ?>
  </tbody>
   
</table>

<hr>

<a href = "formTypeMonumentCreer.php">

<button type="submit">Ajouter Libellé</button>
</a>


    
</body>
</html>