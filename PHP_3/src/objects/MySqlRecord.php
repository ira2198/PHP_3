<?php

namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBRecordInterface;

class MySqlRecord implements DBRecordInterface
{
    public function creatingTable(): string
    {
        return " Creating a MySql table\n";
    }
}