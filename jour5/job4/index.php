<?php
// Définir la fonction calcule() avec trois paramètres
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opération invalide";
    }
}

// Exemple d'utilisation de la fonction calcule()
$resultat1 = calcule(10, '+', 5);  // Résultat: 10 + 5 = 15
$resultat2 = calcule(10, '-', 5);  // Résultat: 10 - 5 = 5
$resultat3 = calcule(10, '*', 5);  // Résultat: 10 * 5 = 50
$resultat4 = calcule(10, '/', 2);  // Résultat: 10 / 2 = 5
$resultat5 = calcule(10, '/', 0);  // Résultat: "Erreur : division par zéro"
$resultat6 = calcule(10, '%', 3);  // Résultat: 10 % 3 = 1

// Afficher les résultats
echo "Résultat 1 : " . $resultat1 . "<br>";
echo "Résultat 2 : " . $resultat2 . "<br>";
echo "Résultat 3 : " . $resultat3 . "<br>";
echo "Résultat 4 : " . $resultat4 . "<br>";
echo "Résultat 5 : " . $resultat5 . "<br>";
echo "Résultat 6 : " . $resultat6 . "<br>";
?>
