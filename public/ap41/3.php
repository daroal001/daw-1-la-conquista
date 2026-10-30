<?php

$num = 20;  // Cuántos números primos quiero

$numActu = 2;
$primos = [];

// bucle primos
while (count($primos) < $num) {
    
    $esPrimo = true;

    // Los números menores a 2 no son primos
    if ($numActu < 2) {
        $esPrimo = false;
    } else {
        // Verificar si el numero actual tiene divisores
        for ($i = 2; $i * $i <= $numActu; $i++) {
            if ($numActu % $i == 0) {
                $esPrimo = false; 
                break; // divisor no primo salimos del for
            }
        }
    }

    if ($esPrimo) {
        $primos[] = $numActu;
    }

    $numActu++;
}

var_dump($primos) 



?>