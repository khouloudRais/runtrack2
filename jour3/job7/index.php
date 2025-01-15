<?php
// Création de la chaîne de caractères
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Conversion de la chaîne en un tableau de caractères
$tab = str_split($str);

// Récupération du dernier caractère
$last_char = $tab[count($tab) - 1];

// Parcours de la chaîne et remplacement des caractères
for ($i = 0; $i < count($tab) - 1; $i++) {
    $tab[$i] = $tab[$i + 1];
}

// Le dernier caractère prend la valeur du premier
$tab[count($tab) - 1] = $last_char;

// Conversion du tableau modifié en chaîne de caractères
$new_str = implode($tab);

// Affichage de la nouvelle chaîne
echo $new_str;
?>
