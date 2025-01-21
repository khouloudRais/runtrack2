<?php
// Définir un tableau de styles CSS possibles
$styles = [
    'style1',
    'style2',
    'style3'
];

// Choisir un style aléatoire à appliquer
$selectedStyle = $styles[array_rand($styles)];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec style aléatoire</title>
    <!-- Lier le fichier CSS externe selon le style sélectionné -->
    <link rel="stylesheet" href="css/<?php echo $selectedStyle; ?>.css">
</head>
<body>

    <form action="index.php" method="post">
        <label for="style">Choisissez un style :</label>
        <select id="style" name="style">
            <option value="moderne">Moderne</option>
            <option value="vintage">Vintage</option>
            <option value="minimaliste">Minimaliste</option>
        </select>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
