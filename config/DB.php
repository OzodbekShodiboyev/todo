<?php
class DB
{
    public $servername;

    public $dbname;
    public $username;
    public $password;


    public function __construct($servername, $dbname, $username, $password) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
    }
}


