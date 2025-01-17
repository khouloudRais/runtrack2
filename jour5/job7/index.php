<?php
// Fonction pour mettre en gras les mots commençant par une majuscule
function transformGras($str) {
    $words = explode(" ", $str);
    foreach ($words as &$word) {
        if (ctype_upper($word[0])) {
            $word = "<strong>$word</strong>";
        }
    }
    return implode(" ", $words);
}

// Fonction César : décalage des caractères
function transformCesar($str, $shift = 2) {
    $result = '';
    foreach (str_split($str) as $char) {
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $base = ctype_upper($char) ? 65 : 97;
            $result .= chr(($ascii - $base + $shift) % 26 + $base);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

// Fonction plateforme : remplacement "me" par "_"
function transformPlateforme($str) {
    return preg_replace('/me\b/', '_', $str);
}

// Initialiser le texte transformé
$transformedText = "";

// Appliquer la transformation en fonction du choix
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["str"];
    $choice = $_POST["choice"];

    if ($choice == "gras") {
        $transformedText = transformGras($str);
    } elseif ($choice == "cesar") {
        $transformedText = transformCesar($str);
    } elseif ($choice == "plateforme") {
        $transformedText = transformPlateforme($str);
    }
}
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de texte</title>
</head>
<body>

<h1>Formulaire de transformation de texte</h1>

<form method="POST">
    <label for="str">Entrez un texte : </label>
    <input type="text" id="str" name="str" required><br><br>

    <label for="choice">Choisissez une transformation :</label>
    <select id="choice" name="choice" required>
        <option value="gras">Gras (mots avec majuscule en gras)</option>
        <option value="cesar">César (décalage de 2 caractères)</option>
        <option value="plateforme">Plateforme (remplace "me" par "_")</option>
    </select><br><br>

    <button type="submit">Appliquer</button>
</form>

<!-- Affichage du texte transformé -->
<?php
if ($transformedText) {
    echo "<h2>Texte transformé :</h2>";
    echo "<p>$transformedText</p>";
}
?>

</body>
</html>
