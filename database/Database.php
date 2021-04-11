<?php

class Database {
    protected $dbHost = 'localhost';
    protected $dbUserName = 'root';
    protected $dbPassword = '';
    protected $databaseName = 'db_batch7';
    protected $dbConnection;
    protected $result;

    // method
    public function __construct(){
        
        // database connect
        $dbObj = new mysqli($this->dbHost, $this->dbUserName, $this->dbPassword,$this->databaseName);

        $this->dbConnection = $dbObj;

        if(!$dbObj->connect_error) {

            // echo "<pre>";
            // print_r($result->fetch_all(MYSQLI_ASSOC));
        }
        else {
            echo "Unable to connect";
        }
    }

    public function insertData() {
        $insertQuery = "INSERT INTO products(name,price)  VALUES ('Product4',13.50)";
        return $this->dbConnection->query($insertQuery);
    }

    public function selectData(){
        $selectQuery = 'SELECT * FROM products';
        $this->result = $this->dbConnection->query($selectQuery);

        echo "<pre>";
        print_r($this->result->fetch_all(MYSQLI_ASSOC));
    }

    public function updateData(){
        $updateQuery = 'UPDATE products SET name = "Product5" WHERE id =  5';
        return $this->dbConnection->query($updateQuery);
    }

    public function deleteData(){
        $deleteQuery = 'DELETE FROM products WHERE id = 6';
        return $this->dbConnection->query($deleteQuery);
    }
}

$databaseObj = new Database;

$databaseObj->selectData();
// $databaseObj->insertData();
$databaseObj->updateData();
$databaseObj->deleteData();