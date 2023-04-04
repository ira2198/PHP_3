<?php
include '../PHP_3/RandArray.php';

$arr = array_fill_rand(100); // Сортировка была выполнена за 24.281817913055 секунд 
$start = microtime(true);

function combSort($my_array){
	$gap = count($my_array);
        $swap = true;
	while ($gap > 1 || $swap){
		if($gap > 1) $gap /= 1.25;
 		$swap = false;
		$i = 0;
		while($i+$gap < count($my_array)){
			if($my_array[$i] > $my_array[$i+$gap]){
				list($my_array[$i], $my_array[$i+$gap]) = array($my_array[$i+$gap],$my_array[$i]);
				$swap = true;
			}
			$i++;
		}
	}
	return $my_array;
}
$result = combSort($arr);
echo 'Сортировка была выполнена за ' . (microtime(true) - $start) . " секунд \n";
// print_r($result);

