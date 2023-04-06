<?php

include  __DIR__ . "/vendor/autoload.php";

use PHP\LevelThree\Construction;


    // задаем исходное математическое выражение
    $str = "(x+42)^2+7*y-z";
    $x = 2;
    $y = 6;
    $z = 3;

    $parse = new Construction();  
   

    // строительство дерева классов
    $parse->builder($str);
    
    
    // echo '<pre>';
    // echo print_r($parse->getArNode());
    // echo '</pre>';


    echo "Выражение:\n" .  $str . " = " . $parse->calc($x, $y, $z);

    echo " при: x=" . $x . "; y=" . $y . "; z=" . $z;