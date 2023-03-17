<?php 

namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBConectionInterface;

class MySqlConection implements DBConectionInterface
{
    public function connect(): string
    {
        return " Connecting to the MySql database\n";
    }
}