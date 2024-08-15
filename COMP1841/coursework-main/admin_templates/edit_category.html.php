<form action="edit_category.php" method="post">
    <div class="form-group mt-3">
        <input type="hidden" name="categoryid" value="<?= $category['id'] ?>">
        <label for='categoryname'>Edit question type here:</label>
        <textarea name="categoryname" rows="1" cols="20">
        <?= $category['categoryname']; ?>   
        </textarea>
    </div>
    <input type="submit" name="submit" value="Save">
</form>