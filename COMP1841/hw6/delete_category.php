<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'DELETE FROM category WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    header('location: view_category.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to connect to delete category: ' .$e->getMessage();
}
include 'templates/layout.html.php';