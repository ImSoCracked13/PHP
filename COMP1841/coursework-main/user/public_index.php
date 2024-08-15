<?php



$title = 'Student Question User Posting Forum';
ob_start();
include '../user_templates/public_home.html.php';
$output = ob_get_clean();
include '../user_templates/public_layout.html.php';