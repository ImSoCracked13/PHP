<?php

try {
    include '../inc/database_connection.php';
    include '../inc/database_functions.php';

    $companies = all_companies($pdo);

    ob_start();
    include '../temp/companies.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include '../temp/layout.html.php';