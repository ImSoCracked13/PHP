<p><?= $total_students ?> total included in the Database.</p>
<a href="add_student.php">Add a new Student</a>
<table class="table table-success">
        <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Email</th>
                <th>Class</th>
                <th>Edit</th>
                <th>Remove</th>
        </tr>
        <?php
        foreach($students as $student):
        ?>
        <tr>
                <td>
                        <?= htmlspecialchars($student['id'], ENT_QUOTES,'UTF-8') ?>
                </td>

                <td>
                        <?= htmlspecialchars($student['studentname'], ENT_QUOTES,'UTF-8') ?>
                </td>

                <td>
                        (<?= htmlspecialchars($student['studentemail'], ENT_QUOTES,'UTF-8') ?>)
                </td>

                <td>
                        [<?= htmlspecialchars($student['studentclass'], ENT_QUOTES,'UTF-8') ?>]
                </td>

                <td>
                        <a href="edit_student.php?id=<?=$student['id']?>">Edit</a>
                </form>
                </td>

                <td>
                <form action="remove_student.php" method="post">
                        <input type="hidden" name="id" value="<?= $student['id'] ?>">
                        <input class="btn btn-danger" type="submit" value="Remove" onclick="return confirm('Are you sure to remove this student?')">
                </form>
                </td>
        </tr>
        <?php endforeach; ?>
</table>