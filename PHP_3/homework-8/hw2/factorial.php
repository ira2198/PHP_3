<?php

//Простая рекурсия - выполняется N раз 

function calculateFactorial($n)
{ 
        /* Factorial of zero is 1 */
        if ( $n == 0 ) {
             return 1; 
 }  else if ( $n > 0 ) {
             //Recursive call
             return $n * calculateFactorial ($n - 1);      
 } 
}
 
$result = calculateFactorial (5);
 
var_dump($result);

