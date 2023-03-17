<?php

namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBConectionInterface;

class PostgreConection implements DBConectionInterface 
{
    public function connect(): string
    {
        return " Connecting to the Postgre database\n";
    }
}