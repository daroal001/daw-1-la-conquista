<?php

$jugador1 = [];
$jugador2 = [];
$ganador1 = [];
$ganador2 = [];
$empate = 0;
$suma1 = 0;
$suma2 = 0;
$sumawin1 = 0;
$sumawin2 = 0;
$partidas = 25;

for ($i = 0; $i < $partidas; $i++) {
$con = 0;
// lanzador de dados
while ($con < 5) {
    $dado1 = mt_rand(1, 6);
    $dado2 = mt_rand(1, 6);
    $resultado = $dado1 + $dado2;
    $jugador1[] = $resultado;
    $dado3 = mt_rand(1, 6);
    $dado4 = mt_rand(1, 6);
    $resultado2 = $dado3 + $dado4;
    $jugador2[] = $resultado2;
    $con++;
 // suma de los resultados
for ($i = 0; $i < count($jugador1) && $i < count($jugador2); $i++) {
    $suma1 += $jugador1[$i];
    $suma2 += $jugador2[$i];
}
    if ($suma1 > $suma2) {
        $ganador1[] += 1;
        $ganador2[] = 0;
    } elseif ($suma2 > $suma1) {
        $ganador1[] = 0;
        $ganador2[] += 1;
    } else {
        $empate++;
    }
 }
}

for ($i = 0; $i < count($ganador1) && $i < count($ganador2); $i++) {
    $sumawin1 += $ganador1[$i];
    $sumawin2 += $ganador2[$i];
}

$porcentaje1 = ($sumawin1 / $partidas) * 100;
$porcentaje2 = ($sumawin2 / $partidas) * 100;


echo "player1: $sumawin1 <br>";
echo "player2: $sumawin2 <br>";
echo "Empates: $empate <br>";
echo "Winrate player1: " . number_format($porcentaje1) . "% <br>";
echo "Winrate player2: " . number_format($porcentaje2) . "%";