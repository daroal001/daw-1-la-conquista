<?php

$num0 = 0;
$num1 = 1;
$n = 10;

for ($i = 1; $i <= $n; $i++) {
echo "$num1 <br>";
$num2 = $num0 + $num1;
$num0 = $num1;
$num1 = $num2;
}


?>