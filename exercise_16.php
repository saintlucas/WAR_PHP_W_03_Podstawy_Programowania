<?php

function power($a, $n) {
    if ($n == 0) {
        return 1;
    }

    $pow = $a;
    for ($i = 1; $i < $n; $i = $i + 1) {
        $pow = $pow * $a;
    }
    return $pow;
}

$p = power(2, 3);
echo $p;
