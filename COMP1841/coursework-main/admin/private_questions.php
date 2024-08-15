<?php

try {
    include '../includes/database_connection.php';
    include '../includes/database_functions.php';

    $questions = all_questions($pdo);
    $title = 'Private Question List';
    $total_questions = total_questions($pdo);

    ob_start();
    include '../admin_templates/private_questions.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include '../admin_templates/private_layout.html.php';