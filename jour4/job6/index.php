<?php
    // Vérifier si le champ "nombre" a été rempli
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        // Vérifier si c'est un nombre entier
        if (is_numeric($nombre)) {
            // Vérifier si le nombre est pair ou impair
            if ($nombre % 2 == 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Pair ou Impair</title>
</head>
<body>

    <h1>Vérifier si un nombre est pair ou impair</h1>
    
    <form action="" method="get">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <input type="submit" value="Vérifier">
    </form>

 

</body>
</html>
