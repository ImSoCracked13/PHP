<?php
if (isset($_POST['question_text'])) {
    try {
        include '../sql/connection.php';

        $sql = 'INSERT INTO questions SET
                question_text = :question_text,
                question_date = CURDATE()';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':question_text', $_POST['question_text']);
        $stmt->execute();
        header('location: list.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    $title = 'Post new question';
    ob_start();
    try {
        include '../sql/connection.php';
        $sql = "SELECT * FROM answer";
        $answer = $pdo->query($sql);
        include 'insert.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        echo "Error : $e";
    }
}
include 'layout.html.php';