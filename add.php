<?php
require 'config/DB.php';

$db = (new DB())->connect();
// echo $db;
if (isset($_POST['todo'])) {
    $todo = htmlspecialchars(trim($_POST['todo']));
    $current_date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `todos` (`name`, `created_at`, `updated_at`) 
                VALUES (:todo, :created_at, :updated_at)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':todo', $todo);
    $stmt->bindParam(':created_at', $current_date);
    $stmt->bindParam(':updated_at', $current_date);
    $stmt->execute();

    header('Location: index.php');
}
