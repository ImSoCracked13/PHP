<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        
</body>
</html><a href="add_staff.php">Add Staff</a>
        <?php
        foreach ($staffs as $staff):
        ?>

                <?= htmlspecialchars($staff['staffname'], ENT_QUOTES,'UTF-8') ?>
                <br>

                <?= htmlspecialchars($staff['companyname'], ENT_QUOTES,'UTF-8') ?>
                <br>

                <?= date('d/m/Y', strtotime($staff[2])) ?>
                <br>

        <?php endforeach; ?>
</table>