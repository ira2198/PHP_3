<?php

interface DBConectionInterface { 
public function connect(): string;
}

interface DBQueryBuilerInterface {
    public function creatingQueries(): string;
}

interface DBRecordInterface {
    public function creatingTable(): string;
}


class MySqlConection implements DBConectionInterface
{
    public function connect(): string
    {
        return "Connecting to the MySql database \n";
    }
}

class MySqlQueryBuilder implements DBQueryBuilerInterface
{
    public function creatingQueries(): string
    {
        return "Creating MySql queries \n";
    }
}

class MySqlRecord implements DBRecordInterface
{
    public function creatingTable(): string
    {
        return "Creating a MySql table \n";
    }
}


class OracleConection implements DBConectionInterface
{
    public function connect(): string
    {
        return "\nConnecting to the Oracle database";
    }
}

class OracleQueryBuilder implements DBQueryBuilerInterface
{
    public function creatingQueries(): string
    {
        return "\nCreating Oracle queries";
    }
}

class OracleRecord implements DBRecordInterface
{
    public function creatingTable(): string
    {
        return "\nCreating a Oracle table\n";
    }
}

class PostgreConection implements DBConectionInterface
{
    public function connect(): string
    {
        return "\nConnecting to the Postgre database";
    }
}

class PostgreQueryBuilder implements DBQueryBuilerInterface
{
    public function creatingQueries(): string
    {
        return "\nCreating Postgre queries";
    }
}

class PostgreRecord implements DBRecordInterface
{
    public function creatingTable(): string
    {
        return "\n Creating a Postgre table\n";
    }
}

interface AbstractFactoryDB  
{
    public function conection(): DBConectionInterface;
    public function record(): DBRecordInterface;
    public function queryBuiler(): DBQueryBuilerInterface; 
}

class MySqlFactory implements AbstractFactoryDB
{
    public function conection(): DBConectionInterface  
    {
        return new MySqlConection();
    }

    public function record(): DBRecordInterface
    {
        return new MySqlRecord();
    }

    public function queryBuiler(): DBQueryBuilerInterface
    {
        return new MySqlQueryBuilder();
    }
}


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


class PostgreFactory implements AbstractFactoryDB
{
    public function conection(): DBConectionInterface
    {
        return new PostgreConection();
    }

    public function record(): DBRecordInterface
    {
        return new PostgreRecord();
    }

    public function queryBuiler(): DBQueryBuilerInterface
    {
        return new PostgreQueryBuilder();
    }
}


function base (AbstractFactoryDB $base) 
{
   echo $base->conection()->connect();
   echo $base->record()->creatingTable();
   echo $base->queryBuiler()->creatingQueries();
}


echo "DB MySql\n" ;
$mySql = new MySqlFactory();
base($mySql);

echo "\n DB Postgre";
$postgre = new PostgreFactory();
base($postgre);

echo "\n DB Oracle";
$oracle = new OracleFactory();
base($oracle);