<?php
// Création de la chaîne de caractères
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Dictionnaire pour stocker les occurrences de voyelles et consonnes
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Liste des voyelles
$voyelles = "aeiouAEIOU";

// Parcours de la chaîne et comptage des voyelles et consonnes
for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];
    
    // Vérification si le caractère est une lettre
    if (ctype_alpha($caractere)) {
        // Si c'est une voyelle
        if (strpos($voyelles, $caractere) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage du tableau HTML
echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>" . $dic["voyelles"] . "</td>
                <td>" . $dic["consonnes"] . "</td>
            </tr>
        </tbody>
      </table>";
?>

