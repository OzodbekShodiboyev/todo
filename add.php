<?php
require 'config/DB.php';
 
if(isset($_POST['submit']) && isset($_POST['todo'])){
    $todo = $_POST['todo'];
    echo $todo;
    
}

?>