<?php

$num = 0;

while ($num <= 100) {
    $num++;
    $par = $num % 2;
    if ($par == 0) {
        echo "$num <br>";
    }
}

?>