<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background: #99AAb5;">
    <div class="p-3 mb-2 bg-success text-white">
        <h1 class="text-center" class="display-1">Process of Logging In</h1>
    </div>
    <br>
    <div class="text-center">
        <h1 class="text-info">User Login</h1>
    </div>
    <div class="d-flex justify-content-center">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" name="username" required minlength=3>
                <small id="note" class="form-text text-muted">Please enter a valid username</small>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check" onclick="showPassword()">
                <label class="form-check-label" for="check">Show password</label>
            </div>
            <button type="submit" class="btn btn-primary" value="Login" name="login">Login</button>
            <br>
            <label>Don't have account yet?</label>
            <a href="register.php">Register here</a>
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="../guest_index.php">Go Back to Guest Page</a>
    <br>
    <footer style="padding: 1em; background-color: yellowgreen; font-size: 0.8em; position: absolute; bottom: 0; width: 100%; height: 2.5rem;">&copy; CW 2023</footer>

    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>