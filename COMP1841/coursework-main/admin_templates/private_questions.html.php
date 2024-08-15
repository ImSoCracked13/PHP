<p><?= $total_questions ?> total submitted to the Database.</p>
<a href="add_question.php">Add a new Question</a>
<table class="table table-info">
        <tr>
                <th>Question</th>
                <th>Question Type</th>
                <th>Student</th>
                <th>Student Class</th>
                <th>Date Created</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Remove</th>
        </tr>
        <?php
        foreach ($questions as $question) {
        ?>
        <tr>
                <td>
                        <?= htmlspecialchars($question['questiontext'], ENT_QUOTES,'UTF-8') ?>
                        <br>
                </td>

                <td>
                        <?= htmlspecialchars($question['categoryname'], ENT_QUOTES,'UTF-8') ?>
                </td>
                
                <td>
                        (by <a href="mailto:<?= htmlspecialchars($question['studentemail'], ENT_QUOTES, 'UTF-8' ) ?>">
                        <?= htmlspecialchars($question['studentname'], ENT_QUOTES, 'UTF-8') ?></a>)
                </td>

                <td>
                        [<?= htmlspecialchars($question['studentclass'], ENT_QUOTES,'UTF-8') ?>]
                </td>

                <td>
                        <?= date('d/m/Y', strtotime($question[2])) ?>
                </td>

                <td>
                        <img src= "<?= $question['questionimage'] ?>" width="80" height="80">
                </td>

                <td>
                        <a href="edit_question.php?id=<?=$question['id']?>">Edit</a>
                </td>

                <td>
                <form action="remove_question.php" method="post">
                        <input type="hidden" name="id" value="<?= $question['id'] ?>">
                        <input class="btn btn-danger" type="submit" value="Remove" onclick="return confirm('Are you sure to remove this question?')">
                </form>
                </td>
        </tr>
        <?php } ?>
</table>