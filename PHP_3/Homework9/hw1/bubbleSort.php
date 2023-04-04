<?php

include '../PHP_3/RandArray.php'; //46.720147848129 секунд 

$a = array_fill_rand(30000);

function bubbleSort($array){

    for( $i=0; $i < count($array); $i++ ){
        $count = count($array);

        for( $j = $i+1; $j < $count; $j++){
            if($array[$i] > $array[$j]){
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    return $array;
}

$start = microtime(true);
$result =  bubbleSort($a);
echo 'Скрипт был выполнен за ' . (microtime(true) - $start) . " секунд \n";
//print_r($result);