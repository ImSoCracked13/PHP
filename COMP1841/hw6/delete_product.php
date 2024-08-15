<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'DELETE FROM product WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    header('location: view_product.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to connect to delete product: ' .$e->getMessage();
}
include 'templates/layout.html.php';