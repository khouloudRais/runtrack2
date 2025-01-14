<?php
for ($i = 1; $i <= 100; $i++) {
    // Vérifier si le nombre est un multiple de 3 et de 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    }
    // Vérifier si le nombre est un multiple de 3
    elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    }
    // Vérifier si le nombre est un multiple de 5
    elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    }
    // Sinon afficher le nombre
    else {
        echo $i . "<br>";
    }
}
?>
