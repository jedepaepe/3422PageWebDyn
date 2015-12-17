<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Démo Javascript Inject</title>
    </head>
    <body>
        <main>
            <section class='description'>
                <h1>Démo Javascript Inject</h1>
                <p>Démonstration de l'utilisation de Javascript pour injecter
                des données dans du code HTML à partir d'un objet JSON</p>
            </section>
            <section class='demo'>
                <p id='inject'></p>
            </section>
        </main>
        <script>
        var film = {id:1, titre:"César et Rosalie", annee:1972};
        document.getElementById('inject').innerHTML = film.id + " " + film.titre + " " + film.annee;
        </script>
    </body>
</html>
