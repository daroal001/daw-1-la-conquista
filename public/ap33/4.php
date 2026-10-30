<?php

$tiempo = 11;
$dia = "tarde";
$preciobase = 100;

if ($dia == "mañana") {
    $iva = 0.15;
} elseif ($dia == "domingo") {
    $iva = 0.03;
} else {
    $iva = 0.10;
}

$precio1 = $preciobase;
$precio2 = $preciobase + 80;
$precio3 = $preciobase + 80 + 70;
$precio4 = $preciobase + 80 + 70 + 50;

$precioiva1 = $precio1 + ($precio1 * $iva);
$precioiva2 = $precio2 + ($precio2 * $iva);
$precioiva3 = $precio3 + ($precio3 * $iva);
$precioiva4 = $precio4 + ($precio4 * $iva);

if ($tiempo <= 5) {
    $total = $tiempo * $precioiva1;
} elseif ($tiempo <= 8) {
    $total = 5 * $precioiva1 + (($tiempo - 5) * $precioiva2);
} elseif ($tiempo <= 10) {
    $total = 5 * $precioiva1 + 3 * $precioiva2 + (($tiempo - 8) * $precioiva3);
} else {
    $total = 5 * $precioiva1 + 3 * $precioiva2 + 2 * $precioiva3 + (($tiempo - 10) * $precioiva4);
}

echo $total;

?>