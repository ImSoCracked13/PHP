<?php

if (!isset($_POST['register'])) {
    include 'register.html.php';
} else {
    include './sql/connection.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['passwordconfirm'];

    if ($password != $confirm_password) {
        echo "Passwords do not match";
        header('location: register.php');
    } else {
        $sql = "INSERT INTO user SET username = :username, password = :password, email = :email";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':username', $username);
        $stm->bindValue(':password', $password);
        $stm->bindValue(':email', $email);
        $stm->execute();
        //redirect to login
        header('location: login.php');
    }
}
