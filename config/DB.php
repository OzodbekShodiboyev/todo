<?php
class DB
{
    public $servername = "localhost";

    public $dbname = "todo";
    public $username = "root";
    public $password = "";

    public $conn;

    public function connect() {
        $conn = null;
        
        try {
           $this->$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
        
    }
}


