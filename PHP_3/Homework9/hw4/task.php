<?php
$arrPrinme = [2, 3, 5, 7, 11, 13];    

function isPrime($num) {
    // Получаем лимит для делителя
    $dividersLimit = $num / 2;
        
    // Проверяем делители с шагом 2
    for ($i = 3; $i < $dividersLimit; $i += 2) {
        if ($num % $i === 0) {
            return false;
        }
    }    
    return true;
}
    
    // Начнем поиск
for ($i = 13; $i < (10001*11); $i += 2) {
    if ( isPrime($i)) {
       $arrPrinme[] = $i;
                 
        if (count($arrPrinme) === 10001) {
            echo 'Result: ' . $i;
        }
    }
}

 

