<?php

namespace PHP\LevelThree\factory;

use PHP\LevelThree\objects\interfaces\DBConectionInterface;
use PHP\LevelThree\objects\interfaces\DBQueryBuilerInterface;
use PHP\LevelThree\objects\interfaces\DBRecordInterface;

interface AbstractFactoryDB  
{
    public function conection(): DBConectionInterface;
    public function record(): DBRecordInterface;
    public function queryBuiler(): DBQueryBuilerInterface;   

}