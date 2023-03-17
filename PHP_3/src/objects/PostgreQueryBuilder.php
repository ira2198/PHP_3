<?php

namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBQueryBuilerInterface;

class PostgreQueryBuilder implements DBQueryBuilerInterface
{
    public function creatingQueries(): string
    {
        return " Creating Postgre queries\n";
    }
}