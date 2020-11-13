<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <?php 

        // INCLUDING THE COUNTER PAGE
        include 'counter.php';

        echo "<h1>Please to have you in our company !!! !!!</h1>";

        echo "<h2>You Visted Our Pages " . $_SESSION['counter'] . " Times</h2>";


        // UNSET THE SESSION
        session_unset();

        // DESTROY THE SESSION
        session_destroy();


    ?>
</body>
</html>