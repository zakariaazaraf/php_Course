<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    
    <?php 

        // INCLUDING COUNTER
        include 'counter.php';

        echo "<h1>Welcome to our company !!!, About Page</h1>";

        echo "<h3>You viewed our pages : " . $_SESSION['counter'] . " Times</h3>";

        echo "<h3><a href='sessionHome.php'>Home Page</a></h3>";

        echo "<h3><a href='sessionLogout.php'>Logout</a></h3>";
    ?>
</body>
</html>