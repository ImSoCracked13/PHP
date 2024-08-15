<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header><h1>Gaming Peripherals</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="view_category.php">Category Type</a></li>
                <li><a href="view_product.php">Product List</a></li>
                <li><a href="insert_category.php">Add a new category</a></li>
                <li><a href="insert_product.php">Add a new product</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; IJDB 2023</footer>
    </body>
</html>