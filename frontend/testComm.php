<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bypass | moteur de recherche</title>
    <style>
        *, ::before, ::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('./background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100dvh;
            align-items: center;
        }

        header, main, footer {
            height: 33%;
        }

        main {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form {
            backdrop-filter: blur(5px); /* Apply blur effect */
            display: flex;
            flex-direction: column;
            padding: 10px;
            width: 65%;
            border-radius: 25px;
            align-items: center;
        }
        input, label {
            margin: 20px;
        }

        input[type = "text"] {
            height: 60px;
            width: 85%;
            border-radius: 10px;
            padding-left: 15px;
            font-size: 1.3rem;
        }

        input[ type = "submit"] {
            height: 40px;
            width: 60%;
            border-radius: 7px;
            text-align: center;
            font-size: 1.1rem;
        }


        footer {
            background: black;
            height: 7%;
            max-height: 30px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

        }
    </style>
</head>
<body>
    <header>
        <h1>Contourner le système, Ici naviguer sans contrainte !</h1>
    </header>
    <main>
        <form action="" method="" class="form">
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