<?php
namespace PHP\LevelThree\objects;

use PHP\LevelThree\objects\interfaces\DBRecordInterface;

class OracleRecord implements DBRecordInterface
{
    public function creatingTable(): string
    {
        return " Creating a Oracle table\n";
    }
}