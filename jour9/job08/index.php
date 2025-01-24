<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacité Totale des Salles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: rgb(176, 54, 146);
            color: white;
        }

        tr:nth-child(even) {
            background-color: rgb(140, 196, 230);
        }

        tr:hover {
            background-color: rgb(140, 196, 230);
        }

        /* Optionnel : style du tableau quand il n'y a pas de données */
        .no-data {
            text-align: center;
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Capacité Totale des Salles</h1>

    <?php
    // Paramètres de connexion
    $host = 'localhost'; // Hôte de la base de données
    $dbname = 'jour8';  // Nom de la base de données
    $username = 'root';  // Nom d'utilisateur
    $password = '';      // Mot de passe

    try {
        // Connexion à la base de données avec PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour récupérer la somme des capacités des salles
        $query = "SELECT SUM(capacite) AS capacite_totale FROM salles";
        $stmt = $pdo->query($query);

        // Récupération du résultat
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $capacite_totale = $result['capacite_totale'];

        // Affichage du résultat dans un tableau
        echo '<table>';
        echo '<tr><th>Capacité Totale</th></tr>';
        echo '<tr><td>' . $capacite_totale . '</td></tr>';
        echo '</table>';

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>

</body>
</html>
