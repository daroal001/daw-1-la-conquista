<?php

$x = 20;
$y = 50;
$z = 15;

if ($x > $y && $x > $z){
    echo "x es el mayor x: $x y: $y z: $z";
}elseif ($y > $x && $y > $z){
    echo "y es el mayor x: $x y: $y z: $z";
}elseif ($z > $x && $z > $y){
    echo "z es el mayor x: $x y: $y z: $z";
}

?>