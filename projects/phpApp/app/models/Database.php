<?php

namespace App\models;
use mysqli;

class Database {
    // property
    protected $dbHost = 'localhost';
    protected $dbUserName = 'root';
    protected $dbPassword = '';
    protected $dbDatabase = 'db_batch7';
    protected $dbConnection;

    // method
    public function __construct() {

        // database connection
        $dbObj = new mysqli($this->dbHost, $this->dbUserName, $this->dbPassword,$this->dbDatabase);
        $this->dbConnection = $dbObj;
    }

    public function insertData($insertQuery) {
        return $this->dbConnection->query($insertQuery);
    }

    public function selectData($selectQuery){
        $result = $this->dbConnection->query($selectQuery);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateData($updateQuery){
        return $this->dbConnection->query($updateQuery);
    }

    public function deleteData($deleteQuery){
        return $this->dbConnection->query($deleteQuery);
    }
}

