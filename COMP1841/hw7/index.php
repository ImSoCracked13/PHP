<?php
$title = 'Book Store Database';
ob_start();
include 'templates/index.html.php';
$output = ob_get_clean();
include 'templates/layout.html.php';