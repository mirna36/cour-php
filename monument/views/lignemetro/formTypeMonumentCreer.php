<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
    session_start();
    ?>
    <title>Document</title>
</head>
<body>
<div>Type Monument</div>
<hr>
<form action="../../controller/typemonument/TypeMonumentCreerAccept.php" method="post">
<div>
    <label for="name">Libellé:</label>
    <input type="text" id="name" name="libelle" >
</div>
<br>
<div class="button">
    <button type="submit">Valider</button>
</div>
<br>

</form>
<a href = "ListeTypeMonument.php">

<button type="submit">Retour Liste</button>
</a>
</body>
</html>



