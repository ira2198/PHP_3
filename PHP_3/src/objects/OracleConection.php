<?php

namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBConectionInterface;

class OracleConection implements DBConectionInterface
{
    public function connect(): string
    {
        return " Connecting to the Oracle database\n";
    }
}