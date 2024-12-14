<?php 
require_once '../models/Todo.php';


$db = (new DB())->connect();

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $todo = new Todo();
    $todo->destroy($id);
    header('Location:../index.php');
    
    
}
?>