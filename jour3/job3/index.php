<?php
// Création de la chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Liste des voyelles (majuscules et minuscules)
$voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Si le caractère actuel est une voyelle, l'afficher
    if (in_array($str[$i], $voyelles)) {
        echo $str[$i];
    }
}
?>
