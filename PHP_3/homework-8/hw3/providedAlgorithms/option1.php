<?php

$n = 100;
$array[]= [];

for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j < $n; $j *= 2) {
        $array[$i][$j]= true;
    } 
}
print_r($array);

// i-j*2