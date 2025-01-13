<?php
  // Déclaration des variables
  $isActive = true;
  $age = 25;
  $name = "LaPlateforme";
  $price = 19.99;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau PHP</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo gettype($isActive); ?></td>
            <td>$isActive</td>
            <td><?php echo $isActive ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($age); ?></td>
            <td>$age</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($name); ?></td>
            <td>$name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($price); ?></td>
            <td>$price</td>
            <td><?php echo $price; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
