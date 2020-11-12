<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
</head>
<body>

    <?php
        /*
            $_REQUEST[] an associative array that by defalt contains the content of $_GET, $_POST and $_COOKIE
        */  
    ?>

    <form action = "<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

        <input type="text" name="firstName">

        <input type="submit" value="Login">

    </form>

    <?php 

        if(!empty($_REQUEST)){

            $_POST["lastName"] = "azaraf"; // THIS ITEM COULDN'T BE IN $_REQUEST ARRAY

            echo "<h2>Print the POST array</h2>";
            echo "<pre>";

            print_r($_POST);

            echo "</pre>";

            echo "<h2>Print the REQUEST array</h2>";
            echo "<pre>";

            print_r($_REQUEST);

            echo "</pre>";

        }

        
    ?>
        
</body>
</html>