<?php

include '../PHP_3/Homework9/hw1/quickSortL.php';

$orderedArr = $result; 

function binarySearch ($myArray, $num) {
    //определяем границы массива
    $left = 0;
    $right = count($myArray) - 1;
    echo "длинна массива $right элементов" . PHP_EOL;
    $countI = 1;

    while ($left <= $right) {
        //находим центральный элемент с округлением индекса в меньшую сторону
        $middle = floor(($right + $left)/2);
        //если центральный элемент и есть искомый
        if ($myArray[$middle] == $num) {
            echo "Выполнено шагов  $countI" . PHP_EOL;
            return $middle;
        }
        elseif ($myArray[$middle] > $num) {
        //сдвигаем границы массива до диапазона от left до middle-1
            $right = $middle - 1;
            $countI++;
        }
        elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
            $countI++;
        }
    }
    return null;
}
   
echo "Индекс искомого элемента  " . binarySearch($orderedArr, 222222222);