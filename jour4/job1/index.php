<?php
echo count($_GET);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>

    <h1>Formulaire GET</h1>
    
    <form action="compte_get.php" method="get">
        <label for="param1">Paramètre 1:</label>
        <input type="text" name="param1" id="param1"><br><br>

        <label for="param2">Paramètre 2:</label>
        <input type="text" name="param2" id="param2"><br><br>

        <label for="param3">Paramètre 3:</label>
        <input type="text" name="param3" id="param3"><br><br>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
