<?php
// Définir la fonction occurrences() avec deux paramètres : $str et $char
function occurrences($str, $char) {
    // Utiliser la fonction substr_count() pour compter les occurrences de $char dans $str
    return substr_count($str, $char);
}

// Exemple d'utilisation de la fonction occurrences()
$texte = "LaPlateforme est un endroit génial !";
$caractere = "e";

// Appeler la fonction pour compter les occurrences de $caractere dans $texte
$resultat = occurrences($texte, $caractere);

// Afficher le résultat
echo "Le caractère '$caractere' apparaît $resultat fois dans la chaîne \"$texte\".";
?>
