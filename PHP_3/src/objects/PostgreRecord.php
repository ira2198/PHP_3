<?php

namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBRecordInterface;

class PostgreRecord implements DBRecordInterface
{
    public function creatingTable(): string
    {
        return " Creating a Postgre table\n";
    }
}