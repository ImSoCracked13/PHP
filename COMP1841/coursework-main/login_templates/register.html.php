<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background: #99AAb5;">
    <div class="p-3 mb-2 bg-info text-white">
        <h1 class="text-center" class="display-1">Process of Registering</h1>
    </div>
    <br>
    <div class="text-center">
        <h1 class="text-info">User Registration</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" name="username" required minlength=3>
                <small id="note" class="form-text text-muted">Enter your new username</small>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Example@gmail.com" name="email" required minlength=3>
                <small id="note" class="form-text text-muted">Enter your register email</small>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <label for="passwordconfirm">Retype your password:</label>
                <input type="password" class="form-control" id="passwordconfirm" placeholder="Password" name="passwordconfirm" required>
            </div>
            <button type="submit" class="btn btn-primary" value="register" name="register">Register</button>
            <br>
            <label>Already have an account?</label>
            <a href="login.php">Login here</a>
        </form>
    </div>
    <br><br><br><br><br><br>
    <a href="../guest_index.php">Go Back to Guest Page</a>
    <br>
    <footer style="padding: 1em; background-color: yellowgreen; font-size: 0.8em; position: absolute; bottom: 0; width: 100%; height: 2.5rem;">&copy; CW 2023</footer>
</body>