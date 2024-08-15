<?php
if(isset($_POST['genre_name'])){
    try{
        include 'includes/db_connection.php';

        $sql = 'INSERT INTO genres SET
        genre_name = :genre_name';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('genre_name', $_POST['genre_name']);
        $stmt->execute();
        header('location: genres.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    $title = 'Add a new genre';
    ob_start();
    include 'templates/add_genre.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';