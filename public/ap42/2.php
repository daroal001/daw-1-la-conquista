<?php

$numeros = [[1, 2, 3, 4],
            [5, 6, 7, 8]];

$filas = count($numeros);
$columnas = count($numeros[0]);
$resultado = [];

$matrizValida = true;

// comprobador del tamaño de la matriz

for ($fila = 0; $fila < $filas; $fila++) {
    if (count($numeros[$fila]) != $columnas) {
        $matrizValida = false;
        break;
    }
}

if (!$matrizValida) {
    echo "La matriz no tiene el mismo tamaño en todas sus filas.";
    exit;
}

for ($columna = 0; $columna < $columnas; $columna++) {
    $suma = 0;

    for ($fila = 0; $fila < $filas; $fila++) {
        $suma += $numeros[$fila][$columna];
    }

    $resultado[$columna] = $suma;
}

// auto imprimir el resultado
for ($columna = 0; $columna < $columnas; $columna++) {
    echo "columna $columna: " . $resultado[$columna] . "<br>";
}

?>