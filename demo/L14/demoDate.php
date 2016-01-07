<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Démo date</title>
    </head>
    <body>
        <main>
            <h1>Démo de la fonction date()</h1>
            <p>La fonction date permet de récupérer la date courante,
                voir <a href='http://php.net/manual/fr/function.date.php'>
                    le manuel PHP pour plus de détail</a></p>
            <ul>
                <li>date('d') : <?php echo date('d')?></li>
                <li>date('j') : <?php echo date('j')?></li>
                <li>date('jS') : <?php echo date('jS')?></li>
                <li>date('M') : <?php echo date('M')?></li>
                <li>date('y') : <?php echo date('y')?></li>
                <li>date('Y') : <?php echo date('Y')?></li>
            </ul>
        </main>
    </body>
</html>
