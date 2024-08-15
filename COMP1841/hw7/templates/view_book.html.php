<?php
foreach($books as $book): ?>
        <blockquote>
        <?=htmlspecialchars($book['book_name'], ENT_QUOTES,'UTF-8')?>

        <form action="deletebook.php" method="post">
                <input type="hidden" name="id" value="<?=$book['id']?>">
                <input type="submit" value="Delete">
        </form>
        </blockquote>
        
        <?php endforeach;?>