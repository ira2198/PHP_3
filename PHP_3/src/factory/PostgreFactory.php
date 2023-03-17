<?php

namespace PHP\LevelThree\factory;

use PHP\LevelThree\objects\interfaces\DBConectionInterface;
use PHP\LevelThree\objects\interfaces\DBQueryBuilerInterface;
use PHP\LevelThree\objects\interfaces\DBRecordInterface;
use PHP\LevelThree\objects\PostgreConection;
use PHP\LevelThree\objects\PostgreQueryBuilder;
use PHP\LevelThree\objects\PostgreRecord;

class PostgreFactory implements AbstractFactoryDB
{
    public function conection(): DBConectionInterface
    {
        return new PostgreConection();
    }

    public function record(): DBRecordInterface
    {
        return new PostgreRecord();
    }

    public function queryBuiler(): DBQueryBuilerInterface
    {
        return new PostgreQueryBuilder();
    }
}