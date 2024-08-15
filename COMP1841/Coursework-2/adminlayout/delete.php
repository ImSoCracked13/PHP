<?php
try{
    include '../sql/connection.php';

    $sql = 'DELETE FROM questions WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    header('location: list.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to connect to delete joke: ' .$e->getMessage();
}
include 'layout.html.php';