<?php
session_start();
$nom = $_POST["nom"];
$_SESSION["nom"] = $nom;
$strHtml = "<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Pure PHP</title>
    </head>
    <body>
        <h1>Bienvenue " . $nom . "</h1>
        <p style='color: blue'>
    </body>
</html>";
echo $strHtml;
?>
