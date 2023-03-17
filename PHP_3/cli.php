<?php

use PHP\LevelThree\factory\AbstractFactoryDB;
use PHP\LevelThree\factory\MySqlFactory;
use PHP\LevelThree\factory\OracleFactory;
use PHP\LevelThree\factory\PostgreFactory;

include  __DIR__ . "/vendor/autoload.php";

function base (AbstractFactoryDB $base) 
{
   echo $base->conection()->connect();
   echo $base->record()->creatingTable();
   echo $base->queryBuiler()->creatingQueries();
}

echo "\nDB MySql\n" ;
$mySql = new MySqlFactory();
base($mySql);

echo "\nDB Postgre\n";
$postgre = new PostgreFactory();
base($postgre);

echo "\nDB Oracle";
$oracle = new OracleFactory();
base($oracle);