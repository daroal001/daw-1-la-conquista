<?php

$alumno = mt_rand(0, 120);

switch ($alumno) {
 case ($alumno >= 100):
   echo "es mayor o igual a 100 65€ por alumno";
    break;
 case ($alumno >= 50 && $alumno <= 99 ):
   echo "entre 50 y 100 personas 70€ por alumno";
    break;
 case ($alumno >= 30 && $alumno <=49 ):
   echo "entre 30 y 50 personas 95€ por alumno";
    break;
 default:
    echo "menor a 30 personas 4000€ por alumno";
}
?>