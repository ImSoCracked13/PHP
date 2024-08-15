<?php
try{
    include 'includes/db_connection.php';

    $sql = 'SELECT * FROM books';
    $books = $pdo->query($sql);
    $title = 'Book List';

    ob_start();
    include 'templates/view_book.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';