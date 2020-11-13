<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session second page</title>
</head>
<body>
    
    <?php 

        session_start(); // RESUME SESSION

        echo "<h1>Hello '" . $_SESSION["username"] . "', Your Permission is '" . $_SESSION["permission"] . "'</h1>";

        echo "<h2>You came from this path :</h2>";

        echo "<h5>'" . $_SERVER["HTTP_REFERER"] . "'</h5>";

        echo "<h3><a href='sessionThirdPage.php'>Go to the last page</a></h3>";
    ?>
</body>
</html>