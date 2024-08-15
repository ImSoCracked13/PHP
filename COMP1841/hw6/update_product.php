<?php
if(isset($_POST['product_name'])){
    try{
        include 'includes/DatabaseConnection.php';

        $sql = 'UPDATE product SET
        product_name = :product_name,
        product_quantity = :product_quantity,
        product_price = :product_price,
        product_brand = :product_brand,
        product_image = :product_image';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':product_name', $_POST['product_name']);
        $stmt->execute();
        header('location: view_product.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    $title = 'Update a product';
    ob_start();
    include 'templates/insert_product.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';