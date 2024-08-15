<p><?= $total_categories ?> total stored in the Database.</p>
<a href="add_category.php">Add a new Question Type</a>
<table class="table table-active">
        <tr>
                <th>ID</th>
                <th>Question Type</th>
                <th>Edit</th>
                <th>Remove</th>
        </tr>
        <?php
        foreach($categories as $category):
        ?>
        <tr>
                <td>
                        <?= htmlspecialchars($category['id'], ENT_QUOTES,'UTF-8') ?>
                </td>

                <td>
                        <?= htmlspecialchars($category['categoryname'], ENT_QUOTES,'UTF-8') ?>
                </td>

                <td>
                        <a href="edit_category.php?id=<?=$category['id']?>">Edit</a>
                </form>
                </td>

                <td>
                <form action="remove_category.php" method="post">
                        <input type="hidden" name="id" value="<?= $category['id'] ?>">
                        <input class="btn btn-danger" type="submit" value="Remove" onclick="return confirm('Are you sure to remove this type of question?')">
                </form>
                </td>
        </tr>
        <?php endforeach; ?>
</table>