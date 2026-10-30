<?php

$trajep = 3000;

if ($trajep >= 2500){
    $descuento = $trajep * 0.15;
    $precio = $trajep - $descuento;
    echo "total es $precio 15% descuento";
} else {
    $descuento = $trajep * 0.08;
    $precio = $trajep - $descuento;
    echo "total es $precio 8% descuento";
}

?>