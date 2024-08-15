<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/admin_style.css">
        <title><?=$title?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body style="background: #99AAb5;">
        <header id="admin">
            <h1>
                Student Question Managing Admin Site
            </h1>
        </header>
        <nav>
            <ul>
                <li><a href="private_index.php">Admin Area</a></li>
                <li><a href="private_questions.php">Customize Question List</a></li>
                <li><a href="private_students.php">Customize Student List</a></li>
                <li><a href="private_categories.php">Customize Question Type List</a></li>
                <li><a href="../login/logout.php">Logout</a></li>
            </ul>
        </nav>
        <main><?=$output?></main>
        <footer style="background-color: lime; position: absolute; bottom: 0; width: 100%; height: 2.5rem;">&copy; CW 2023</footer>
    </body>
</html>