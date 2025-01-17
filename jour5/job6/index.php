<?php
// Fonction leetSpeak simplifiée
function leetSpeak($str) {
    // Remplacements simples
    $str = str_replace("a", "4", $str);
    $str = str_replace("A", "4", $str);
    $str = str_replace("e", "3", $str);
    $str = str_replace("E", "3", $str);
    $str = str_replace("l", "1", $str);
    $str = str_replace("L", "1", $str);
    $str = str_replace("o", "0", $str);
    $str = str_replace("O", "0", $str);
    $str = str_replace("t", "7", $str);
    $str = str_replace("T", "7", $str);
    
    return $str;
}

// Exemple d'utilisation
$texte = "Bonjour tout le monde!";
$leetTexte = leetSpeak($texte);

// Afficher le résultat
echo $leetTexte;
?>
