<?php

include '../PHP_3/RandArray.php';

$arr = array_fill_rand(30000); // Сортировка была выполнена за 84.649088144302 секунд 
$start = microtime(true);

function selectSort(array $arr) {
    $count= count($arr);
    if ($count <= 1){
        return $arr;
    }
 
    for ($i = 0; $i < $count; $i++){
        $k = $i;
 
        for($j = $i + 1; $j < $count; $j++){
            if ($arr[$k] > $arr[$j]){
                $k = $j;
            }
 
            if ($k != $i){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
            }
        }
    }
 
    return $arr;
}

$result = selectSort($arr);
echo 'Сортировка была выполнена за ' . (microtime(true) - $start) . " секунд \n";
//print_r($result);