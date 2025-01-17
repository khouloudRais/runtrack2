<?php
// Définir la fonction occurrences() avec deux paramètres : $str et $char
function occurrences($str, $char) {
    // Initialiser le compteur
    $count = 0;

    // Parcourir chaque caractère de la chaîne $str
    for ($i = 0; $i < strlen($str); $i++) {
        // Si le caractère actuel est égal à $char, incrémenter le compteur
        if ($str[$i] == $char) {
            $count++;
        }
    }

    // Retourner le nombre d'occurrences
    return $count;
}

// Exemple d'utilisation de la fonction occurrences()
$texte = "Bonjour";
$caractere = "o";

// Appeler la fonction pour compter les occurrences de $caractere dans $texte
$resultat = occurrences($texte, $caractere);

// Afficher le résultat
echo "Le caractère '$caractere' apparaît $resultat fois dans la chaîne \"$texte\".";
?>
