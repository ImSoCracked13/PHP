<form action="edit_question.php" method="post">
    <div class="form-group mt-3">
        <input type="hidden" name="questionid" value="<?= $question['id'] ?>">
        <label for='questiontext'>Edit your question here:</label>
        <textarea name="questiontext" rows="4" cols="40">
        <?= $question['questiontext']; ?>   
        </textarea>
    </div>
    <input type="submit" name="submit" value="Save">
</form>