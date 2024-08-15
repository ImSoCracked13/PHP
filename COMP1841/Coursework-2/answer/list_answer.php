<?php
try {
    include '../userlayout/connection.php';

    $sql = 'SELECT answer.id, answer.answer_text, answer.answer_date
            FROM answer
            WHERE question_id=:questionid AND user_id=:userid 
            ';
    $answer = $pdo->query($sql);
    $title = 'Answer list';

    ob_start();
    include 'list_answer.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}
include '../userlayout/layout.html.php';

