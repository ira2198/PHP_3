<?php

namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBQueryBuilerInterface;

class MySqlQueryBuilder implements DBQueryBuilerInterface
{
    public function creatingQueries(): string
    {
        return " Creating MySql queries\n";
    }
}