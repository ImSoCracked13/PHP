<?php
foreach($genres as $genre): ?>
        <blockquote>
        <?=htmlspecialchars($genre['genre_name'], ENT_QUOTES,'UTF-8')?>

        <form action="deletegenre.php" method="post">
                <input type="hidden" name="id" value="<?=$genre['id']?>">
                <input type="submit" value="Delete">
        </form>
        </blockquote>
        <?php endforeach;?>