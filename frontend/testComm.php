<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bypass | moteur de recherche</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Contourner le système, Ici naviguer sans contrainte !</h1>
    </header>
    <main>
        <form action="../backend/navigator.php" method="POST" class="form">
            <label for="query">Rechercher</label>
            <input type="text" id="query" name="query" placeholder="rechercher ici...">
            <input type="submit" id="post" name="post" value="rechercher">
        </form>
    </main>
    <footer>
        <p id="footer">Copyright</p>
    </footer>
</body>
</html>