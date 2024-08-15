<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'DELETE FROM books WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    header('location: books.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to connect to delete book: ' .$e->getMessage();
}
include 'templates/layout.html.php';