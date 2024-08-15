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
<form action="add_company.php" method="post">
        <div>
            <label for='companyname' class="h4 text text-dark">Type company name here:</label>
            <textarea class="form-control" name="companyname" rows="1" cols="40">
            </textarea>
        </div>
        <br><br>
        <div>
            <label for="companyaddress" class="h4 text text-dark">Type address:</label>
            <textarea class="form-control" name="companyaddress" rows="1" cols="40">
            </textarea>
        </div>
        <br><br>
        <input type="submit" name="submit" value="Add" style="width: 190px; margin-right: 100px; margin-left: 100px;">
</form>