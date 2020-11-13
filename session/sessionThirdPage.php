<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session third page</title>
</head>
<body>
    
    <?php 

        session_start(); // RESUME SESSION

        echo "<h1>Hello '" . $_SESSION["username"] . "' You are in the last page</h1>";

        echo "<h2>You came from this page using the session !</h2>";

        echo "<h5>'" . $_SERVER["HTTP_REFERER"]. "'</h5>";
    ?>
</body>
</html>