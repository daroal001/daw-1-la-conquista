<?php





// 1. Mostrar el mapa en pantalla
function mostrarMapa(array $mapa): void {
    foreach ($mapa as $fila) {
        echo implode(" ", $fila) . PHP_EOL;
    }
    echo PHP_EOL;
}

// 2, 4 y 6. Generar mapa de daños y contar celdas Chill (~) y Afectadas (W)
function procesarMapaYDaños(array $mapa, array $impactos): array {
    $mapaDaños = $mapa;
    $chillTotal = 0;
    $chillAfectado = 0;

    // Contar Chill original
    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            if ($celda === '~') $chillTotal++;
        }
    }

    // Aplicar impactos integrales
    foreach ($impactos as [$r, $c]) {
        if (!isset($mapaDaños[$r][$c])) continue;
        
        $actual = $mapaDaños[$r][$c];
        if ($actual === 'G') $mapaDaños[$r][$c] = 'S';
        elseif ($actual === '0') $mapaDaños[$r][$c] = 'X';
        elseif ($actual === '~') {
            $mapaDaños[$r][$c] = 'W';
            $chillAfectado++;
        }
    }

    return [$mapaDaños, $chillTotal, $chillAfectado];
}

// 3. Población afectada y bebida
function calcularPoblacion(array $mapaDaños): array {
    $célulasS = array_sum(array_map(fn($f) => array_count_values($f)['S'] ?? 0, $mapaDaños));
    $personas = $célulasS * 3000;
    return [$personas, ($personas * 10) / 1000]; // [Personas, Litros]
}

// 5. Estimación de costes
function calcularCostes(array $mapaDaños): int {
    $x = array_sum(array_map(fn($f) => array_count_values($f)['X'] ?? 0, $mapaDaños));
    $s = array_sum(array_map(fn($f) => array_count_values($f)['S'] ?? 0, $mapaDaños));
    return ($x * 75000) + ($s * 250000);
}

// 7. Recaudación y balance financiero
function calcularFinanzas(int $costes, int $totalChill, int $afectadoChill): array {
    if ($totalChill === 0) return [0, -$costes];
    $minutosTotales = 10000 * 60;
    $ingresos = (int)(($minutosTotales * ($afectadoChill / $totalChill)) * 20);
    return [$ingresos, $ingresos - $costes];
}

// ==========================================
// --- EJEMPLO DE EJECUCIÓN DIRECTA ---
// ==========================================

$mapa = [
    ['0', '0', 'G', '~'],
    ['~', '0', '0', 'G'],
    ['G', 'G', '~', '~']
];

$impactos = [[0, 2], [1, 0], [0, 1]]; // G, ~, 0 afectados

// Ejecución paso a paso
echo "Mapa Original:" . PHP_EOL;
mostrarMapa($mapa);

[$mapaDaños, $totalChill, $afectadoChill] = procesarMapaYDaños($mapa, $impactos);

echo "Mapa de Daños Totales:" . PHP_EOL;
mostrarMapa($mapaDaños);

[$personas, $litros] = calcularPoblacion($mapaDaños);
$costes = calcularCostes($mapaDaños);
[$ingresos, $balance] = calcularFinanzas($costes, $totalChill, $afectadoChill);

echo "--- RESULTADOS ---" . PHP_EOL;
echo "• Personas afectadas: " . number_format($personas) . " Sigmas (Bebida: " . $litros . "L)" . PHP_EOL;
echo "• Coste Reparaciones: " . number_format($costes) . " €" . PHP_EOL;
echo "• Tamaño Chill Total: $totalChill | Afectado (W): $afectadoChill" . PHP_EOL;
echo "• Ingresos Clips: " . number_format($ingresos) . " € | Balance: " . number_format($balance) . " €" . PHP_EOL;
