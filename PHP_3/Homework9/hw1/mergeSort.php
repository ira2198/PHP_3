<?php
include '../PHP_3/RandArray.php';

$arr = array_fill_rand(300000); // 30 000 0.86383700370789 секунд / 300 000 за 59.164968013763 секунд 
$start = microtime(true);

function mergeSort(array $arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
 
    $left  = array_slice($arr, 0, (int)($count/2));
    $right = array_slice($arr, (int)($count/2));
 
    $left = mergeSort($left);
    $right = mergeSort($right);
 
    return merge($left, $right);
}
 
function merge(array $left, array $right) {
    $ret = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            array_push($ret, array_shift($left));
        } else {
            array_push($ret, array_shift($right));
        }
    }
 
    array_splice($ret, count($ret), 0, $left);
    array_splice($ret, count($ret), 0, $right);
 
    return $ret;
}
$result = mergeSort($arr);
echo 'Сортировка была выполнена за ' . (microtime(true) - $start) . " секунд \n";
//print_r($result);