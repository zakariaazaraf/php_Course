<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setcookie modifie delete</title>
</head>

    <?php 

        //DELETE "cookie" 
        setcookie("background", "", time() - 3600); //you should specifie the name and set an expired time


        $mainColor = "#FFF";

        if(!empty($_REQUEST)){

            $mainColor = $_POST["background"];
            
            setcookie("background", $mainColor, time() + 3600*24, "/", "localhost", TRUE, TRUE);
        }

        if(isset($_COOKIE["background"])){
            $mainColor = $_COOKIE["background"];
        }
    ?>
<body style="background-color: <?php echo $mainColor?>">
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">

    <input type="color" name="background">

    <input type="submit" value="Submit Color">

    </form>
</body>
</html>