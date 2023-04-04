<?php

$array = [42, 65, 717, 346, 18536, 3, 13441, 22822, 42, 7546, 542, 6, 42, 5111135];

function deleteAnObject(array $array, int $x)
{
    if(!in_array($x, $array)){
        return $array;
    } else {       
       $del = array_search($x, $array);
       unset($array[$del]);      
      return deleteAnObject($array, $x);
    }
    return $array;
}
print_r( deleteAnObject($array, 42));


/*
// Алгоритм поиска

function deleteAnObject(array $array, int $x)
{   
    $count = count($array);  
    
    for ($i = 0; $i < $count; $i++) {
        echo $i . PHP_EOL;
        if ($array[$i] == $x) {   
            unset($array[$i]);
           return deleteAnObject($array, $x);                  
        }
        elseif ($array[$i] > $x) {
        return $array;
    }
    return null;
    
    }
}

*/
