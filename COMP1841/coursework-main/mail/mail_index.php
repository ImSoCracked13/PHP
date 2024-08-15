<?php

if (!isset($_POST['send'])) {
    include '../user_templates/php_mailer.html.php';
} else {
    $title = $_POST['subject'];
    $content = $_POST['body'];
    include 'php_mailer.php';
} 

