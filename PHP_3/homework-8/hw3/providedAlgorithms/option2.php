<?php

$n = 100;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) {
    for ($j = $i; $j < $n; $j++) {
     $array[$i][$j]= $j;
    }
 }
print_r($array);

