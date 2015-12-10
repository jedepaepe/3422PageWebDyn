<?php
//$titre = $_REQUEST['titre'];
$titre = filter_input(INPUT_GET, 'titre', FILTER_SANITIZE_STRING);
//$annee = $_REQUEST['annee'];
$annee = filter_input(INPUT_GET, 'annee', FILTER_SANITIZE_NUMBER_INT);
//$description = $_REQUEST['description'];
$description = filter_input(INPUT_GET, 'description', FILTER_SANITIZE_STRING);
if ( ! empty($titre) and $annee > 1870) {
    $pdo = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
    $reponse = $pdo->query("INSERT INTO film (id, titre, annee, description) "
            . "VALUES (NULL, '$titre', '$annee', '$description')");
} else {
    echo "<h1 style='background: black;color: red'>ERROR</h1>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Film ajouté</title>
    </head>
    <body>
        <h1>OK</h1>
        <p>Le film <?php echo $titre ?> 
            de l'année <?php echo $annee ?> 
            de description <?php echo $description ?>
            a été ajouté</p>
    </body>
</html>
