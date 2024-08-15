<?php

if(isset($_POST['companyname'])) {
    try {
        include '../inc/database_connection.php';
        include '../inc/database_functions.php';
        insert_company($pdo, $_POST['companyname'],$_POST['companyaddress']);
        header('location: companies.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../inc/database_connection.php';
    include '../inc/database_functions.php';
    ob_start();
    include '../temp/add_company.html.php';
    $output = ob_get_clean();
}
include '../temp/layout.html.php';
