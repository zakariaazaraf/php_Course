<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rediraction page</title>
</head>
<body>
    
    <?php 
        /*
            GET THE DATA FROM THE OTHER PAGE
        */

        $username = $_GET["username"];
        $password = $_GET["userpassword"];

        echo "<h1>Printing the data you send from ". $_SERVER["HTTP_REFERER"] . "</h1>";

        echo "<h3>The method used : '" . $_SERVER["REQUEST_METHOD"] . "'</h3>";

        echo "<h5>USERNAME '" . $username . "'</h5>";
        echo "<h5>PASSWORD '" . $password . "'</h5>";

        
    ?>
</body>
</html>