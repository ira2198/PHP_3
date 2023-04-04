<?php

include '../PHP_3/RandArray.php';

$arr = array_fill_rand(30000); // 30 000 за 9.5367431640625E-7 секунд / 1000 000 за 16.828660964966 секунд 
$start = microtime(true);

function heapify(&$arr, $n, $i)
{
    $largest = $i; // Инициализируем наибольший элемент как корень
    $l = 2*$i + 1; // левый = 2*i + 1
    $r = 2*$i + 2; // правый = 2*i + 2

    // Если левый дочерний элемент больше корня
    if ($l < $n && $arr[$l] > $arr[$largest])
        $largest = $l;

    //Если правый дочерний элемент больше, чем самый большой элемент на данный момент
    if ($r < $n && $arr[$r] > $arr[$largest])
        $largest = $r;

    // Если самый большой элемент не корень
    if ($largest != $i)
    {
        $swap = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $swap;

        // Рекурсивно преобразуем в двоичную кучу затронутое поддерево
        heapify($arr, $n, $largest);
    }
}

//Основная функция, выполняющая пирамидальную сортировку
function heapSort(&$arr)
{
    $count = count($arr);
    // Построение кучи (перегруппируем массив)
    for ($i = $count / 2 - 1; $i >= 0; $i--)
        heapify($arr, $count, $i);

    //Один за другим извлекаем элементы из кучи
    for ($i = $count-1; $i >= 0; $i--)
    {
        // Перемещаем текущий корень в конец
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;

        // вызываем процедуру heapify на уменьшенной куче
        heapify($arr, $i, 0);
    }
}

/* Вспомогательная функция для вывода на экран массива размера n */
function printArray(&$arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count; ++$i)
        echo ($arr[$i]." ") ; 

} 

heapSort($arr);
// echo 'Oтсотрирован ' . "\n";
echo 'Сортировка была выполнена за ' . (microtime(true) - $start) . " секунд \n";
//printArray($arr);