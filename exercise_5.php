<?php

$a = 5;
$b = 8;
$c = 9;

if ($a > $b) {
    if ($a > $c) {
        echo 'największa liczba to a';
    }
}
if ($b > $a) {
    if ($b > $c) {
        echo 'największa liczba to b';
    }
}
if ($c > $a) {
    if ($c > $b) {
        echo 'największa liczba to c';
    }
}