<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>test</title>
        <style>
            .FormSansBR input {
                display: block;
            }
        </style>
    </head>
    <body>
        <form class="FormSansBR" action="filmAdd.php" method="GET">
            <input type="text" name="titre" placeholder="titre" required>
            <input type="number" name="annee" placeholder="annee" required>
            <input type="text" name="description" placeholder="description">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
