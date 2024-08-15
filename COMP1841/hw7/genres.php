<?php
try{
    include 'includes/db_connection.php';

    $sql = 'SELECT * FROM genres';
    $genres = $pdo->query($sql);
    $title = 'Genre List';

    ob_start();
    include 'templates/view_genre.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';