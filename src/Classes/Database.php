<?php

namespace Joshua\Test\Classes;

use PDO;

class Database {

    private $host = "localhost";
    private $dbname = "test";
    private $usr = "root";
    private $pwd = "root";
    public $conn;

    public function getConnection()
    {
        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->usr,$this->pwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            return $e->getMessage();
        }

        return $this->conn;
    }
}