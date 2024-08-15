<?php

if (!isset($_POST['register'])) {
    include '../login_templates/register.html.php';
} else {
    include '../includes/database_connection.php';
    include '../includes/database_functions.php';

    $title = 'User Registeration';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['passwordconfirm'];

    if ($password != $confirm_password) {
        echo "Password does not match!";
        header('location: register.php');
    } else {
        register($pdo, $_POST['username'], $_POST['password'], $_POST['email']);
        echo "Account created!";
        header('location: login.php');
    }
}
