<?php

namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBQueryBuilerInterface;

class OracleQueryBuilder implements DBQueryBuilerInterface
{
    public function creatingQueries(): string
    {
        return " Creating Oracle queries\n";
    }
}