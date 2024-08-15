<?php

include '../includes/database_connection.php';
include '../includes/database_functions.php';
try {
    if(isset($_POST['questiontext'])) {
        update_question($pdo, $_POST['questionid'], $_POST['questiontext']);
        header('location: public_questions.php');
    } else {
        $question = get_question($pdo, $_GET['id']);
        $title = 'Edit question';

        ob_start();
        include '../user_templates/edit_question.html.php';
        $output = ob_get_clean();
    }
} catch(PDOException $e) {
    $title = 'An error has occured';
    $output =  'Error editing question: ' . $e->getMessage();
}
include '../user_templates/public_layout.html.php';