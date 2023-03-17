<?php

namespace PHP\LevelThree\factory;

use PHP\LevelThree\objects\interfaces\DBConectionInterface;
use PHP\LevelThree\objects\interfaces\DBQueryBuilerInterface;
use PHP\LevelThree\objects\interfaces\DBRecordInterface;
use PHP\LevelThree\objects\MySqlQueryBuilder;
use PHP\LevelThree\objects\MySqlConection;
use PHP\LevelThree\objects\MySqlRecord;

class MySqlFactory implements AbstractFactoryDB
{
    public function conection(): DBConectionInterface  
    {
        return new MySqlConection();
    }

    public function record(): DBRecordInterface
    {
        return new MySqlRecord();
    }

    public function queryBuiler(): DBQueryBuilerInterface
    {
        return new MySqlQueryBuilder();
    }
}