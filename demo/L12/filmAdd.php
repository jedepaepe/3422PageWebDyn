<?php
$titre = $_REQUEST['titre'];
$annee = $_REQUEST['annee'];
$pdo = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
$reponse = $pdo->query("INSERT INTO film (id, titre, annee) "
        . "VALUES (NULL, \"$titre\", \"$annee\")");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>OK</h1>
        <p>Le film <?php echo $titre?> de l'année <?php echo $annee?> a été ajouté</p>
    </body>
</html>
