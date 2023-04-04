<?php

include '../PHP_3/RandArray.php';

$arr = array_fill_rand(300000);
$arr[]= 424242;

//  print_r($arr);
$start = microtime(true);

function LinearSearch ($array, $num) {
    $countI = 0;
    
    foreach ($array as $index => $indexValue) {
        $countI++;
            if ($indexValue === $num) {
            echo "Выполнено иттераций  $countI" . PHP_EOL;
            return $index;
        }
    }     
        return "не найден";
    }


echo 'Скрипт был выполнен за ' . (microtime(true) - $start) . " секунд " . PHP_EOL;

$result = LinearSearch($arr, 424242);
echo 'Индекс искомого элемента ' . $result . PHP_EOL;