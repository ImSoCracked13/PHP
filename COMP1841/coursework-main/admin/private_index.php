<?php

$title = 'Student Question Admin Managing Site';
ob_start();
include '../admin_templates/private_home.html.php';
$output = ob_get_clean();
include '../admin_templates/private_layout.html.php';