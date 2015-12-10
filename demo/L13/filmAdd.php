<?php
$titre = $_REQUEST['titre'];
$annee = $_REQUEST['annee'];
$description = $_REQUEST['description'];
$pdo = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
$reponse = $pdo->query("INSERT INTO film (id, titre, annee, description) "
        . "VALUES (NULL, \"$titre\", \"$annee\", \"$description\")");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Film ajouté</title>
    </head>
    <body>
        <h1>OK</h1>
        <p>Le film <?php echo $titre?> 
            de l'année <?php echo $annee?> 
            de description <?php echo $description?>
            a été ajouté</p>
    </body>
</html>
