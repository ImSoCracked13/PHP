<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mailing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background: #99AAb5;">
    <div class="p-3 mb-2 bg-primary text-white">
        <h1 class="text-center" class="display-1">Contact Us</h1>
    </div>
    <br>
    <div class="text-center">
        <h1 class="text-secondary">Mailing</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <form action="" method="post">
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="subject" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="Send" name="send">Send</button>
            <br>
        </form>
    </div>
    <br><br><br><br><br><br><br><br>
    <a href="../user/public_index.php">Go back to Home</a>
    <footer style="padding: 1em; font-size: 0.8em; background-color: greenyellow; position: absolute; bottom: 0; width: 100%; height: 2.5rem;">&copy; CW 2023</footer>
</body>
