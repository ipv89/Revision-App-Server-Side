<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 8/11/2015
 * Time: 10:07 AM
 */

namespace RAserverSide;

class Dbconfig {
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function Dbconfig() {
        $this -> serverName = 'localhost';
        $this -> userName = 'root';
        $this -> passCode = 'pass';
        $this -> dbName = 'dbase';
    }
}
?>