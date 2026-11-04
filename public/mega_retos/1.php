<?php
function totalDistance(string $input): int {
    // 1. Extraer todos los números del texto crudo
    preg_match_all('/\d+/', $input, $matches);
    $numbers = array_map('intval', $matches[0]);

    // Separar en lista izquierda (claves pares) y derecha (claves impares)
    $left = array_filter($numbers, fn($k) => $k % 2 === 0, ARRAY_FILTER_USE_KEY);
    $right = array_filter($numbers, fn($k) => $k % 2 !== 0, ARRAY_FILTER_USE_KEY);

    // 2. Ordenar ambas listas de menor a mayor
    sort($left);
    sort($right);

    // 3 y 4. Calcular distancias absolutas y sumarlas
    return array_sum(array_map(fn($l, $r) => abs($l - $r), $left, $right));
}

// --- Prueba con el ejemplo ---
$input = "3 4\n4 3\n2 5\n1 3\n3 9\n3 3";
echo totalDistance($input); // Imprime: 11
