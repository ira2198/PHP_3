<?php


include '../PHP_3/Homework9/hw1/quickSortL.php';

$arr = $result; //
// print_r($arr);
 

$start = microtime(true);
function InterpolationSearch($myArray, $num)
{
    $start = 0;
    $last = count($myArray) - 1;
    $countI = 0;
    echo "длинна массива $last элементов" . PHP_EOL;

    while (($start <= $last) 
    && ($num >= $myArray[$start])
    && ($num <= $myArray[$last])) 
    {
        // оценка середины
        $pos = floor($start + (
        (($last - $start) / ($myArray[$last] - $myArray[$start]))* ($num - $myArray[$start])
        ));
        
        if ($myArray[$pos] == $num) {
            $countI++;
            echo "Выполнено иттераций  $countI" . PHP_EOL;
            return $pos;
        }
        if ($myArray[$pos] < $num) {
            $countI++;
            $start = $pos + 1;
        }
        else {
            $countI++;
            $last = $pos - 1;
        }
    }
    return null;
}
echo 'Скрипт был выполнен за ' . (microtime(true) - $start) . " секунд \n";

echo "Индекс элемента  " . InterpolationSearch($arr, 222222222);