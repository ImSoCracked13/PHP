<?php

if(isset($_POST['categoryname'])){
    try{
        include '../includes/database_connection.php';
        include '../includes/database_functions.php';
        insert_category($pdo, $_POST['categoryname']);
        header('location: private_categories.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../includes/database_connection.php';
    include '../includes/database_functions.php';
    $title = 'Add a new category';
    $students = all_students($pdo);
    $categories = all_categories($pdo);
    ob_start();
    include '../admin_templates/add_category.html.php';
    $output = ob_get_clean();
}
include '../admin_templates/private_layout.html.php';