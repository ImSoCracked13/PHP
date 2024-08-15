<form action="edit_student.php" method="post">
    <div class="form-group mt-3">
        <input type="hidden" name="studentid" value="<?= $student['id'] ?>">
        <label for='studentname'>Edit your name here:</label>
        <textarea name="studentname" rows="1" cols="20">
        <?= $student['studentname']; ?>   
        </textarea>
    </div>
    <input type="submit" name="submit" value="Save">
</form>
