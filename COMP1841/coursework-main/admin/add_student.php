<?php

if(isset($_POST['studentname'])){
    try{
        include '../includes/database_connection.php';
        include '../includes/database_functions.php';
        insert_student($pdo, $_POST['studentname'],$_POST['studentemail'], $_POST['studentclass']);
        header('location: private_students.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../includes/database_connection.php';
    include '../includes/database_functions.php';
    $title = 'Add a new student';
    $students = all_students($pdo);
    $categories = all_categories($pdo);
    ob_start();
    include '../admin_templates/add_student.html.php';
    $output = ob_get_clean();
}
include '../admin_templates/private_layout.html.php';