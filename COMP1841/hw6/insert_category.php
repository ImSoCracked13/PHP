<?php
if(isset($_POST['category_name'])){
    try{
        include 'includes/DatabaseConnection.php';

        $sql = 'INSERT INTO category SET
        category_name = :category_name';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('category_name', $_POST['category_name']);
        $stmt->execute();
        header('location: view_category.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    $title = 'Add a new category';
    ob_start();
    include 'templates/insert_category.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';