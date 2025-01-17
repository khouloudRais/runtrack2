<?php
// Définir la fonction bonjour() avec un paramètre booléen $jour
function bonjour($jour) {
    // Vérifie si le paramètre est true
    if ($jour) {
        echo "Bonjour";
    }
}

// Exemple d'appel de la fonction avec true
bonjour(true);  // Affichera "Bonjour"
?>
