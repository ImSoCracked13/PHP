<?php

include '../includes/database_connection.php';
include '../includes/database_functions.php';
try {
    if(isset($_POST['studentname'])) {
        update_student($pdo, $_POST['studentid'], $_POST['studentname']);
        header('location: private_students.php');
    } else {
        $student = get_student($pdo, $_GET['id']);
        $title = 'Edit student';

        ob_start();
        include '../admin_templates/edit_student.html.php';
        $output = ob_get_clean();
    }
} catch(PDOException $e) {
    $title = 'An error has occured';
    $output =  'Error editing student: ' . $e->getMessage();
}
include '../admin_templates/private_layout.html.php';