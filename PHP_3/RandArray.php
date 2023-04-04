<?php

function array_fill_rand(int $limit, $min=false, $max=false)
{
	$limit = $limit;
	$array = [];
	
	if ($min !== false && $max !== false)
	{
		$min = (int)$min;
		$max = (int)$max;
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand($min, $max);
		}
	}
	else
	{
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand();
		}
	}
	
	return $array;
}

$randArr = array_fill_rand(1000);

// echo '<pre>';

// // Массив из 5 элементов
// $rand_array = array_fill_rand(5);
// print_r($rand_array);

// // Массив из 10 элементов
// $rand_array = array_fill_rand(10);
// print_r($rand_array);

// // Массив из 5 элементов, со случайными числами в диапазоне от 0 до 10
// $rand_array = array_fill_rand(5, 0, 10);
// print_r($rand_array);

// // Массив из 10 элементов, со случайными числами в диапазоне от -100 до 100
// $rand_array = array_fill_rand(10, -100, 100);
// print_r($rand_array);

// echo '</pre>';