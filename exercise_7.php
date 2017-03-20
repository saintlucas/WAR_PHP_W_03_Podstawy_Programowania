<?php

$x = 5;
$i = 2;
$silnia = 1;

while ($i <= $x) {
    $silnia = $silnia * $i;
    $i = $i + 1;
}
echo $silnia;
echo "<br>";


//rozwiązanie z pętlą for

$silnia = 1;

for ($j = 2; $j <= $x; $j = $j + 1) {
    $silnia = $silnia * $j;
}
echo $silnia;
