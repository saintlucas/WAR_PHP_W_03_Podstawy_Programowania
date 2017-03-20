<?php

function FooBar($x) {
    $napis = '';
    //działanie funkcji
    for ($i = 1; $i <= $x; $i = $i + 1) {
        if ($i % 3 == 0) {
            if ($i % 5 == 0) {
                $napis = $napis . 'FOOBAR';
            } else {
                $napis = $napis . 'FOO';
            }
        } elseif ($i % 5 == 0) {
            $napis = $napis . "Bar";
        } else {
            $napis = $napis . $i;
        }
    }


    return $napis;
}

echo $napis = FooBar(15);
?>