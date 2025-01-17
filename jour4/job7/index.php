<?php
// Si les valeurs de largeur et hauteur sont envoyées via GET
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];

    // Dessin de la maison avec PHP
    echo "<pre>";

    // Dessiner le toit
    for ($i = 0; $i < $hauteur; $i++) {
        // Espaces avant le toit pour centrer
        $spaces = max($hauteur - $i - 1, 0); // On s'assure que les espaces sont >= 0
        echo str_repeat(' ', $spaces);
        // Dessiner le toit avec /
        // Assurer que 2 * $i - 1 est >= 0
        $space_in_between = max(2 * $i - 1, 0);
        echo '/' . str_repeat(' ', $space_in_between) . ($i > 0 ? '\\' : '') . "\n";
    }

    // Dessiner les murs
    for ($i = 0; $i < $largeur; $i++) {
        echo "|" . str_repeat(' ', $largeur - 2) . "|\n";
    }

    // Dessiner la base
    echo str_repeat('-', $largeur) . "\n";

    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison</title>
</head>
<body>

    <h1>Formulaire Maison</h1>
    
    <form action="" method="get">
        <label for="largeur">Largeur :</label>
        <input type="number" name="largeur" id="largeur" required><br><br>

        <label for="hauteur">Hauteur :</label>
        <input type="number" name="hauteur" id="hauteur" required><br><br>

        <input type="submit" value="Dessiner la Maison">
    </form>

</body>
</html>




