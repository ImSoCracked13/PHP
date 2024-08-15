<?php

include '../includes/database_connection.php';
include '../includes/database_functions.php';
try {
    if(isset($_POST['questiontext'])) {
        update_question($pdo, $_POST['questionid'], $_POST['questiontext']);
        header('location: private_questions.php');
    } else {
        $question = get_question($pdo, $_GET['id']);
        $title = 'Edit question';

        ob_start();
        include '../admin_templates/edit_question.html.php';
        $output = ob_get_clean();
    }
} catch(PDOException $e) {
    $title = 'An error has occured';
    $output =  'Error editing question: ' . $e->getMessage();
}
include '../admin_templates/private_layout.html.php';