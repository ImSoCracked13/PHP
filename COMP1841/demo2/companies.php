<?php

try {
    include 'database_connection.php';
    include 'database_functions.php';

    $companies = all_companies($pdo);

    ob_start();
    include 'companies.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'layout.html.php';