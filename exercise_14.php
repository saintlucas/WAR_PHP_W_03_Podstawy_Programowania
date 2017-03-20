<?php
$n = 4;


for ($i = 1; $i < $n; $i++){
    for ($j = 1; $j < $n; $j++){
        
        $suma = $i * $j;
        echo $i . '*' . $j . '=' . $suma;
       }
    echo '<br>';
}