<?php

$numeros = [[1, 2, 3, 4],
            [5, 6, 7, 8]];

foreach ($numeros as $suma => $num) {
    $suma = 0;

    for ($j = 0; $j < count($num); $j++) {
        $suma += $num[$j];
    }

    echo "Array $suma<br>";
}
?>