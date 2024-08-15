<?php

if(isset($_POST['questiontext'])) {
    try {
        include '../includes/database_connection.php';
        include '../includes/database_functions.php';
        insert_question($pdo, $_POST['questiontext'], $_POST['questiondate'], $_POST['students'], $_POST['categories'], $_POST['questionimage']);
        header('location: public_questions.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../includes/database_connection.php';
    include '../includes/database_functions.php';
    $title = 'Add a new Question';
    $students = all_students($pdo);
    $categories = all_categories($pdo);
    ob_start();
    include '../user_templates/add_question.html.php';
    $output = ob_get_clean();
}
include '../user_templates/public_layout.html.php';