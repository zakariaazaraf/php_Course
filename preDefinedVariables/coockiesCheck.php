<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check coockies</title>
</head>
<body>
    
    <?php 

        /*
            setcookie(name, [value], [int expires], [path], [domain], [bool secure], [bool httponly])

            expires => expires's date
            path => '/' main the full site
            secure => use https
    
        */

        echo "<h1>Coockies array</h1>";

        setcookie("zakaria", "setting coockies", time() + 3600, "/"); // set coockies

        setcookie("CEO", "ben salek", time() + 60*60*24, '/', "localhost", TRUE, TRUE);

        if(!empty($_COOKIE)){
            echo "<h2>Coockies content !</h2>";

            echo "<pre>";

            echo print_r($_COOKIE);

            echo "</pre>";
        }else{
            echo "<h2>The coockies are empty!</h2>";
        }
    ?>
</body>
</html>