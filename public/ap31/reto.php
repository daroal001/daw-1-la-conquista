<?php

$totalM = 2;
$total=2;
echo "niño tiene $totalM <br>";
echo " $total <br>";

for ($i = 2; $i <= 8; $i++){
    echo "niño tiene $totalM <br>";
    $totalM = $totalM + 3;
    $total += $totalM;
   echo " $total <br>";
}

?>