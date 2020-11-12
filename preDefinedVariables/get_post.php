<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<body>
    
    <?php 

        /*
            $_GET["name"]
            $_POST["name"]
        */
    ?>

    <form action="getPostTest.php" method="GET">

        <input type="text" name="username">

        <input type="password" name="userpassword">
        
        <input type="submit" value="Login">

    </form>
</body>
</html>