<?php

$x = 68;

if ($x > 0) {
    if ($x < 100) {
        if ($x < 40) {
            echo 'ocena niedostateczna';
        } elseif ($x < 55) {
            echo 'ocena dopuszczająca';
        } elseif ($x < 70) {
            echo 'ocena dostateczna';
        } elseif ($x < 85) {
            echo 'ocena dobra';
        } elseif ($x < 99) {
            echo 'ocena badzo dobra';
        } elseif ($x < 100) {
            echo 'ocena celująca';
        }
    } else {
        echo 'wartość nieprawidłowa';
    }
}