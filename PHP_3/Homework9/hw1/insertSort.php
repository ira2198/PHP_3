<?php
include '../PHP_3/RandArray.php';

$arr = array_fill_rand(30000); // Сортировка была выполнена за 24.281817913055 секунд 
$start = microtime(true);

function insertSort(array $arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
 
    for ($i = 1; $i < $count; $i++) {
        $cur_val = $arr[$i];
        $j = $i - 1;
 
        while (isset($arr[$j]) && $arr[$j] > $cur_val) {
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $cur_val;
            $j--;
        }
    }
    return $arr;
}
$result = insertSort($arr);
echo 'Сортировка была выполнена за ' . (microtime(true) - $start) . " секунд \n";
// print_r($result);