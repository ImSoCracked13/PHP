<?php
if(isset($_POST['product_name'])){
    try{
        include 'includes/DatabaseConnection.php';

        $sql = 'UPDATE category SET
        category_name = :category_name,';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':category_name', $_POST['category_name']);
        $stmt->execute();
        header('location: view_category.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    $title = 'Update a category';
    ob_start();
    include 'templates/update_category.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';