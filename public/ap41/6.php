<?php

$dias = [31,28,31,30,31,30,31,30,31,30,31,30];
$meses = [
   0 => 'Enero', 
   1 => 'Febrero', 
   2 => 'Marzo', 
   3 => 'Abril', 
   4 => 'Mayo', 
   5 => 'Junio', 
   6 => 'Julio', 
   7 =>  'Agosto', 
   8 =>  'Septiembre', 
   9 =>  'Octubre', 
   10 =>  'Noviembre', 
   11 =>  'Diciembre'
];

$fechas = [];

$año = 2018;

  for ($i = 0; $i < 10; $i++) {
   $mes = array_rand($meses);
   $dia = array_rand($dias);
   $nomMEs = $dias[$mes];
   $maxDias = $dias[$mes];

   // sprintf tranforma con %d numerico y %s string
$fechas[] = sprintf("%02d/%02d/%d", $dia, $mes + 1, $año);
}

var_dump($fechas);

?>