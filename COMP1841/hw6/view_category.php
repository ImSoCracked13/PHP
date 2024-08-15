<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'SELECT * FROM category';
    $categories = $pdo->query($sql);
    $title = 'Category List';

    ob_start();
    include 'templates/view_category.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';