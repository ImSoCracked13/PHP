<?php

$title = 'Student Question Guest Spectate Site';
ob_start();
include 'guest_templates/guest_home.html.php';
$output = ob_get_clean();
include 'guest_templates/guest_layout.html.php';
