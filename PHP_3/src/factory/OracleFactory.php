<?php

namespace PHP\LevelThree\factory;

use PHP\LevelThree\objects\interfaces\DBConectionInterface;
use PHP\LevelThree\objects\interfaces\DBQueryBuilerInterface;
use PHP\LevelThree\objects\interfaces\DBRecordInterface;
use PHP\LevelThree\objects\OracleConection;
use PHP\LevelThree\objects\OracleQueryBuilder;
use PHP\LevelThree\objects\OracleRecord;

class OracleFactory implements AbstractFactoryDB
{
    public function conection(): DBConectionInterface
    {
        return new OracleConection();
    }

    public function record(): DBRecordInterface
    {
        return new OracleRecord();
    }

    public function queryBuiler(): DBQueryBuilerInterface
    {
        return new OracleQueryBuilder();
    }
}