<?php
try{
    include '../includes/database_connection.php';
    include '../includes/database_functions.php';
    remove_category($pdo, $_POST['id']);
    header('location: private_categories.php');
} catch(PDOException $e) {
$title = 'An error has occured';
$output = 'Unable to remove question type: ' .$e->getMessage();
}
include '../admin_templates/private_layout.html.php';