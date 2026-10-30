<?php

$persona = 400;

switch ($persona) {
 case ($persona > 300):
   echo "es mayor a 300 75€ por plato";
    break;
 case ($persona > 200 && $persona <= 300 ):
   echo "entre 200 y 300 persona 85€ por plato";
    break;

 default:
    echo "95€ por plato";
}
?>