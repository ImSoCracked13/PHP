<?php

try {
    include 'database_connection.php';
    include 'database_functions.php';

    $staffs = all_staffs($pdo);

    ob_start();
    include 'staffs.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'layout.html.php';