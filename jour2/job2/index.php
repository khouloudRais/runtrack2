<?php
for ($i = 0; $i <= 1337; $i++) {
    // Exclure les nombres 26, 37, 88 et 1111
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        continue; // Passer à l'itération suivante sans afficher ce nombre
    }
    echo $i . "<br>"; // Afficher les autres nombres avec un retour à la ligne
}
?>
