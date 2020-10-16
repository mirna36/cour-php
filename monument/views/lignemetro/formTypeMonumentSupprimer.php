<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
    session_start();
    $typeMonument = $_SESSION['typemonument'];

    ?>
    <title>Document</title>
</head>
<body>
<div>SUPPRIMER</div>
<hr>
<form action="../../controller/typemonument/TypeMonumentSupprimerAccept.php" method="post">

    
    <input type="hidden" name="idTypeMonument" value="<?php echo $typeMonument['ID_TYPE_Monument'];?>" >
    <label for="name">Libellé:</label>
    <input type="text" id="name" name="libelle" value="<?php echo $typeMonument['Libelle_TYPE_Monument'];?>" disabled >


    <button type="submit">Supprimer</button>
<hr>

</form>

<a href = "ListeTypeMonument.php">

<button type="submit">Retour</button>
</a>

</div>
</body>
</html>