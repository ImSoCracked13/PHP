<?php
if(isset($_POST['book_title'])){
    try{
        include 'includes/db_connection.php';

        $sql = 'INSERT INTO books SET
        book_title = :book_title';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('book_title', $_POST['book_title']);
        $stmt->execute();
        header('location: books.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    $title = 'Add a new book';
    ob_start();
    include 'templates/add_book.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';