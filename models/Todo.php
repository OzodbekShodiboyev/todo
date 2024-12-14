<?php 
require_once 'config/DB.php';
class Todo{
    private $db;

    public function __construct(){
        $this->db = new DB();
    }
    public function getAllTodo(){
        $stmt = $this->db->connect()->prepare("SELECT * FROM todos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>