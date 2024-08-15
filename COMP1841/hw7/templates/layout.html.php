<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="book.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header><h1>Book Store Database</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="books.php">Book List</a></li>
                <li><a href="addbook.php">Add a new book</a></li>
                <li><a href="addgenre.php">Add a new $genre</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; IJDB 2023</footer>
    </body>
</html>