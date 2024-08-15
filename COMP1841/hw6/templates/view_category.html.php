<?php
foreach($categories as $category): ?>
        <blockquote>
        <?=htmlspecialchars($category['category_name'], ENT_QUOTES,'UTF-8')?>

        <form action="delete_category.php" method="post">
                <input type="hidden" name="id" value="<?=$category['id']?>">
                <input type="submit" value="Delete">
        </form>
        </blockquote>
        <?php endforeach;?>