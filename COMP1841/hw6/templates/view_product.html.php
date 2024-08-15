<?php
foreach($products as $product): ?>
        <blockquote>
        <?=htmlspecialchars($product['product_name'], ENT_QUOTES,'UTF-8')?>

        <form action="delete_product.php" method="post">
                <input type="hidden" name="id" value="<?=$product['id']?>">
                <input type="submit" value="Delete">
        </form>
        </blockquote>
        <?php endforeach;?>