<?php
session_start();
if (isset($_REQUEST["nom"])) { // si le nom est communiqué
    $nom = $_REQUEST["nom"];
    $_SESSION["nom"] = $nom;
} else {
    header("Location: QuiEsTu.php");
    header("coucou: trop bete"); // complètement inutile
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enregistrer</title>
    </head>
    <body>
        <h1>Bienvenue <?php echo $nom ?></h1>
        <p style="color: background"></p>
        <a href="autre.php">Autre</a>
    </body>
</html>
