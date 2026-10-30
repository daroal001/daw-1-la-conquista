<?php

$tamaño = 1;
$tipo = 0;
$precio = 100;

switch ($tipo) {
     case 0:
      if ($tamaño == 1){
    $precio = $precio - 30;
    echo "descuento tamaño 1 30 centimos por kg total es $precio";
    } else { 
     $precio = $precio - 50;
    echo "descuento tamaño 2 50 centimos por kg total es $precio";
    }
    break;
    case 1:
    if ($tamaño == 1){
    $precio = $precio + 20;
    echo "cargo tamaño 1 20 centimos por kg total es $precio";
    } else { 
     $precio = $precio + 30;
     echo "cargo tamaño 2 30 centimos por kg total es $precio"; 
    }
    break;
}
   




?>