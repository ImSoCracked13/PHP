<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="add_staff.php" method="post">
        <div>
            <label for='staffname' class="h4 text text-dark">Type staff name here:</label>
            <textarea class="form-control" name="staffname" rows="1" cols="40">
            </textarea>
        </div>
        <br><br>
        <div>
            <label for="staffdate" class="h4 text text-dark">Pick a Date of Birth:</label>
            <input class="form-control" type="date" name="staffdate" required>
        </div>
        <br><br>
        <div>
            <select class="form-control" name="companies">
                <option value="">Select a company in database</option>
                <?php foreach ($companies as $company): ?>
                    <option value="<?= htmlspecialchars($company['id'], ENT_QUOTES, 'UTF-8') ?>">
                    <?= htmlspecialchars($company['companyname'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                    <?php endforeach; ?>
            </select>
        <input type="submit" name="submit" value="Add" style="width: 190px; margin-right: 100px; margin-left: 100px;">
</form>