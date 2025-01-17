<?php
// Définir la fonction bonjour() avec un paramètre booléen $jour
function bonjour($jour) {
    // Vérifie si le paramètre est true
    if ($jour) {
        echo "Bonjour";
    } else {
        // Si le paramètre est false
        echo "Bonsoir";
    }
}

// Exemple d'appels de la fonction
bonjour(true);  // Affichera "Bonjour"
echo "<br>";    // Pour ajouter une ligne vide entre les résultats
bonjour(false); // Affichera "Bonsoir"
?>
