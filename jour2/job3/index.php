<?php
for ($i = 0; $i <= 100; $i++) {
    // Remplacer le nombre 42 par "La Plateforme_"
    if ($i == 42) {
        echo "La Plateforme_<br>";
    }
    // Si le nombre est entre 0 et 20, l'afficher en italique
    elseif ($i >= 0 && $i <= 20) {
        echo "<i>" . $i . "</i><br>";
    }
    // Si le nombre est entre 25 et 50, le souligner
    elseif ($i >= 25 && $i <= 50) {
        echo "<u>" . $i . "</u><br>";
    }
    // Pour tous les autres nombres, afficher normalement
    else {
        echo $i . "<br>";
    }
}
?>
