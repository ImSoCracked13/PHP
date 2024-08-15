<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="guest_style.css?ver=2">
        <title><?=$title?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body style="background: #99AAb5;">
        <header id="guest">
            <h1>
                Student Question Guest Spectate Site
            </h1>
        </header>
        <nav>
            <ul>
                <li><a href="guest_index.php">Home</a></li>
                <li><a href="login/login.php">Login</a></li>
                <li><a href="login/register.php">Register</a></li>
            </ul>
        </nav>
        <main><?=$output?></main>
        <footer style="background-color: salmon; position: absolute; bottom: 0; width: 100%; height: 2.5rem;">&copy; CW 2023</footer>
    </body>
</html>