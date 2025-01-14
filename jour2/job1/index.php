<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        // Afficher le nombre 42 en gras et souligné
        echo "<strong><u>" . $i . "</u></strong><br>";
    } else {
        // Afficher les autres nombres normalement
        echo $i . "<br>";
    }
}
?>
