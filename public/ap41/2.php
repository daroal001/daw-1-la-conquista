<?php

$num = [];
$total = 5;

for ($i = 0; $i < $total; $i++) {
    $num[] = rand(1, 10);
}

var_dump($num);
?>