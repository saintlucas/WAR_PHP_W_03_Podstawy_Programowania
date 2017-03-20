<?php

$n = 0;
$maks = 20;
$y = 0;

for ($n; $n <= $maks; $n++) {
    if ($n % 2) {
        echo $n . " - nieparzysta" . '<br>';
    } else {
        echo $n . ' - parzysta' . '<br>';
    }
}
