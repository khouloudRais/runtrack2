<?php
// Création du tableau avec les nombres
$tableau = [200, 204, 173, 98, 171, 404, 459];

// Parcours du tableau
foreach ($tableau as $nombre) {
    if ($nombre % 2 == 0) {
        echo "$nombre est paire<br />";
    } else {
        echo "$nombre est impaire<br />";
    }
}
?>
