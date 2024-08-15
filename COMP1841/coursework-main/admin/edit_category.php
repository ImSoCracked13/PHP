<?php

include '../includes/database_connection.php';
include '../includes/database_functions.php';
try {
    if(isset($_POST['categoryname'])) {
        update_category($pdo, $_POST['categoryid'], $_POST['categoryname']);
        header('location: private_categories.php');
    } else {
        $category = get_category($pdo, $_GET['id']);
        $title = 'Edit question type';

        ob_start();
        include '../admin_templates/edit_category.html.php';
        $output = ob_get_clean();
    }
} catch(PDOException $e) {
    $title = 'An error has occured';
    $output =  'Error editing question type: ' . $e->getMessage();
}
include '../admin_templates/private_layout.html.php';