<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session into</title>
</head>
<body>
    
    <?php 

        /*
            $_SESSION[sessionName] => an associative array containing session variables
                                      available to the current script 
            
            session_start([]) => starting the session and continuing in it in another pages
        */

        session_start(); // STARTING THE SESSION

        $_SESSION["username"] = 'zakaria';

        $_SESSION["permission"] = "admin";

        echo "<h1>Page 1 starting the session !</h1>";

        echo "<h3><a href='sessionSecondPage.php'>Go to another page</a></h3>";
    ?>
</body>
</html>