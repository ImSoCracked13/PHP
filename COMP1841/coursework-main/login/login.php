<?php

try {
    if (!isset($_POST['login'])) {
        include '../login_templates/login.html.php';
    } else {
        include '../includes/database_connection.php';
        include '../includes/database_functions.php';


        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':username', $username);
        $stm->bindValue(':password', $password);
        $stm->execute();
        $check = $stm->fetchAll();
        $result = count($check);


        if ($result >= 1) {
            session_start();
            $_SESSION['username'] = $username;


            if ($username == 'admin'and $password == '1234') {
                header('location: ../admin/private_index.php');
            } else {
                header('location: ../user/public_index.php');
            }


        } else {
            echo `Error`;
            header('location: login.php');
        }
    }
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}

