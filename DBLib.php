<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 8/11/2015
 * Time: 10:16 AM
 */


namespace RAserverSide;
include 'DBconfig.php';

class DBLib extends DBconfig
{

    public $connectionString;
    public $dataSet;
    private $sqlQuery;

    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;

    function MariaDB()
    {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;

        $dbPara = new Dbconfig();
        $this->databaseName = $dbPara->dbName;
        $this->hostName = $dbPara->serverName;
        $this->userName = $dbPara->userName;
        $this->passCode = $dbPara->passCode;
        $dbPara = NULL;
    }

    function dbConnect()
    {
        $this->connectionString = mysqli_connect($this->serverName, $this->userName, $this->passCode);
        mysqli_select_db ($this->databaseName, $this->connectionString);
        return $this->connectionString;
    }

    function dbDisconnect()
    {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;
        $this->databaseName = NULL;
        $this->hostName = NULL;
        $this->userName = NULL;
        $this->passCode = NULL;
    }


}



