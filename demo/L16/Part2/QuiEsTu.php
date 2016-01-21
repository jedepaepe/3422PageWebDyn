<?php
/*
 * Formulaire pour introduire son nom 
 */
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Qui es-tu?</title>
    </head>
    <body>
        <form action="enregistrer.php" method="post">
            Nom:<br>
            <input type="text" name="nom">
        </form>
    </body>
</html>
