<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'SELECT * FROM product';
    $products = $pdo->query($sql);
    $title = 'Product List';

    ob_start();
    include 'templates/view_product.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';