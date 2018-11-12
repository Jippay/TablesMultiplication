

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Tables Multiplication</title>
</head>

<body>
    <header>
            <h1>Tables de Multiplication</h1>
    </header>
    <main>
        <form class="choixTables" id="choixTables" method="GET" action="index.php">
            <select id="tables" name="tables">
                <option value="1">Table de 1</option>
                <option value="2">Table de 2</option>
                <option value="3">Table de 3</option>
                <option value="4">Table de 4</option>
                <option value="5">Table de 5</option>
                <option value="6">Table de 6</option>
                <option value="7">Table de 7</option>
                <option value="8">Table de 8</option>
                <option value="9">Table de 9</option>
                <option value="10">Table de 10</option>
            </select>
            <p class="choixText">Choix de la table à afficher</p>
            <input type="submit" id="voir" class="voir" value="voir">
        </form>
            <?php
                $table = $_GET["tables"];
                echo '<h2>'.'Table de multiplication de '.$table.'</h2>';
            ?>
                <div class="result">
                    <div class="gauche">
                        <?php
                            if ( isset($_GET['tables'])) {
                                include "calcul1.php";
                            }
                        ?>
                    </div>
                    <div class="centre">
                        <?php
                            if ( isset($_GET['tables'])) {
                                include "calcul2.php";
                            }
                        ?>
                    </div>
                    <div class="droite">
                        <?php
                            if ( isset($_GET['tables'])) {
                                include "calcul3.php";
                            }
                        ?>
                    </div>
                </div>
        </div>
   
    
    </main>
    <footer>
    </footer>
    <script src="script.js"></script>
</body>
</html>