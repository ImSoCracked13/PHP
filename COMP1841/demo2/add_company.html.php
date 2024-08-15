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
<a href="add_company.php">Add Company</a>

        <?php
        foreach ($companies as $company):
        ?>
                <?= htmlspecialchars($company['companyname'], ENT_QUOTES,'UTF-8') ?>
                <br>

                <?= htmlspecialchars($company['companyaddress'], ENT_QUOTES,'UTF-8') ?>
                <br>

        <?php endforeach; ?>