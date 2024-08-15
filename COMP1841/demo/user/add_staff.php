<?php

if(isset($_POST['staffname'])) {
    try {
        include '../inc/database_connection.php';
        include '../inc/database_functions.php';
        insert_staff($pdo, $_POST['staffname'],$_POST['staffdate'], $_POST['companies']);
        header('location: staffs.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../inc/database_connection.php';
    include '../inc/database_functions.php';
    $companies = all_companies($pdo);
    ob_start();
    include '../temp/add_staff.html.php';
    $output = ob_get_clean();
}
include '../temp/layout.html.php';
