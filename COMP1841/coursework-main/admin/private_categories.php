<?php

try{
    include '../includes/database_connection.php';
    include '../includes/database_functions.php';

    $categories = all_categories($pdo);
    $title = 'Question Type List';
    $total_categories = total_categories($pdo);

    ob_start();
    include '../admin_templates/private_categories.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include '../admin_templates/private_layout.html.php';