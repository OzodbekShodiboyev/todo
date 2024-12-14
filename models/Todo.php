<?php 
require_once __DIR__ . '/../config/DB.php';
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
    public function destroy($id){
        $stmt = $this->db->connect()->prepare("DELETE FROM todos WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return true;
    }
}
?>