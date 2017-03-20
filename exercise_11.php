<?php

$n = 5;

//rozwiazanie z pętlami zależnymi
for ($i = 0; $i < $n; $i = $i + 1) {
    for ($j = 0; $j < $i + 1; $j = $j + 1) {
        echo"*";
    }
    echo "<br>";
}
//rozwiązanie z pętlami niezależnymi
for ($i = 0; $i < $n; $i = $i + 1) {
    for ($j = 0; $j < $n; $j = $j + 1) {
        if ($j < $i) {
            echo '*';
        }
    }
    echo '<br>';
}

