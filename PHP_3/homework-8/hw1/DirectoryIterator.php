<?php

$iter = new RecursiveDirectoryIterator('..\PHP_3\homework-8');


foreach (new RecursiveIteratorIterator($iter) as $item) {

    if (preg_match('(.php$|.html$)', $item)){
        echo  "              " . $item . "\n";  
    } else {
        echo "\n" . $item . "\n";
    } 

}
echo "\n";

