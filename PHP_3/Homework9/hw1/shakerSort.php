<?php
include '../PHP_3/RandArray.php';

$a = array_fill_rand(30000); //Скрипт был выполнен за 45.987074136734 секунд 
$start = microtime(true);

function shakerSort($array) 
{
    $n = count($array);
    $left = 0;
    $right = $n - 1;

    do {
        for ($i = $left; $i < $right; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array($array[$i + 1],
                $array[$i]);
            }
        }
        $right -= 1;

        for ($i = $right; $i > $left; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array($array[$i - 1],
                $array[$i]);
            }
        }
        $left += 1;
    } while ($left <= $right);
    return $array;
}


$result = shakerSort($a);
echo 'Скрипт был выполнен за ' . (microtime(true) - $start) . " секунд \n";
