<?php
try {
    include '../sql/connection.php';

    $sql = 'SELECT questions.id, questions.question_text, questions.question_date
            FROM questions
            ';
    $questions = $pdo->query($sql);
    $title = 'Question list';

    ob_start();
    include 'list.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}
include 'layout.html.php';
