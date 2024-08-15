<?php

try {
    include '../includes/database_connection.php';
    include '../includes/database_functions.php';

    $students = all_students($pdo);
    $title = 'Student List';
    $total_students = total_students($pdo);

    ob_start();
    include '../admin_templates/private_students.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include '../admin_templates/private_layout.html.php';