<?php


function isPrime( $n ){
  $i = 2;
 
  while($i * 2 <= $n){
    if ( $n % $i == 0 ){
      return false;
    } 
  return true;    
  }  
     }  
     
     
function max_prime_div($n)
{
  $k = 3;
  $r = $k;

  while(true){
    if ($n % $k == 0){
      $r = $n;
    } 
    if (isPrime($r)){
      return $r;
    } 
  $k +=2; 
  }  
}

print(" Самый большой делитель  " . max_prime_div(600851475143));





