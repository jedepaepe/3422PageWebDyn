<?php
session_start();
if (isset($_SESSION["nom"])) { // si le nom est communiqué
    $nom = $_SESSION["nom"];
} else {
    header("Location: QuiEsTu.php");
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Autre Bienvenue <?php echo $nom ?></h1>
        <p style="color: background"></p>
        <a href="autre.php">Autre</a>
    </body>
</html>
