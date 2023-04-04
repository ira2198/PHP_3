<?php

include '../PHP_3/RandArray.php';

$a = array_fill_rand(300000); //30 000 за 1.1920928955078E-6 секунд / 300 000 за 9.5367431640625E-7 секунд 
$a[]= 222222222;
$start = microtime(true);

function quickSortLess (array $arr): array
{
    $arrCount = count($arr);
    
    if ($arrCount <=1){
        return $arr;
    }
    $base = $arr[0];
    $low  = [] ;
    $high = [];

    for ($i = 1; $i < $arrCount; $i++) {
        if ($base >= $arr[$i]) {
            $low[] = $arr[$i];
        } else {
            $high[] = $arr[$i];
        }
    }

    $low = quickSortLess($low);
    $high = quickSortLess($high);

    return array_merge($low, [$base], $high);

}
$result = quickSortLess($a, 0, 2);
echo 'Сортировка была выполнена за ' . (microtime(true) - $start) . " секунд \n";
