<div class="container text-center col-md-5 card bg-info">
    <form action="add_question.php" method="post">
        <div class="form-group mt-3">
            <label for='questiontext' class="h4 text text-dark">Type your question here:</label>
            <textarea class="form-control" name="questiontext" rows="4" cols="40">
            </textarea>
        </div>
        <br><br>
        <div class="form-group mt-3">
            <label for="questiondate" class="h4 text text-dark">Pick a Date:</label>
            <input class="form-control" type="date" name="questiondate" required>
        </div>
        <br><br>
        <div class="form-group mt-3">
            <select class="form-control" name="students">
                <option value="">Select a student in database</option>
                <?php foreach ($students as $student): ?>
                    <option value="<?= htmlspecialchars($student['id'], ENT_QUOTES, 'UTF-8') ?>">
                    <?= htmlspecialchars($student['studentname'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
        <br><br>
        <div class="form-group mt-3">
            <select class="form-control" name="categories">
                <option  value="">Select a question type</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8') ?>">
                    <?= htmlspecialchars($category['categoryname'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        </div>
        <br><br>
        <div class="form-group mt-3">
            <label for="questionimage" class="h4 text text-dark">Paste a PNG or JPG Image URL:</label>
            <input class="form-control" type="url" name="questionimage" required>
        </div>
        <br><br>
        <input type="submit" name="submit" value="Add" style="width: 190px; margin-right: 100px; margin-left: 100px;">
    </form>
