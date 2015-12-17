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
                des données dans du code HTML à partir d'un objet JSON.</p>
                <p>Un pas plus loin : un tableau JSon</p>
            </section>
            <section class='demo'>
                <ul id='inject'></ul>
            </section>
        </main>
        <script>
        var films = [
            {id:1, titre:"César et Rosalie", annee:1972},
            {id:2, titre:"Brian", annee:1980},
            {id:3, titre:"Go", annee:1990}];
        var text = "";
        for(var i=0; i<films.length; i++) {
        document.getElementById('inject').innerHTML += 
                "<li>" + films[i].id + " " + films[i].titre + " " + films[i].annee + "</li>";
        }
        </script>
    </body>
</html>
