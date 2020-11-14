<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exit | die</title>
</head>
<body>
    
    <?php 
        /*
            exit([message]) // Terminate the script
            die([message])

            @Code    or exit(message) // HIDE EROOR AND PRINT THE SPECIDIED ONE
            @Code    or die(message)  // HIDE EROOR AND PRINT THE SPECIDIED ONE
        */

        echo "<h1>Test the exit en ddie functions  !!</h1>";

        echo "<h3>LINE OF CODE FOR TESTING ..</h3>";

        echo "<h3>LINE OF CODE FOR TESTING ..</h3>";

        $resource = @fopen("zzz.txt", "r") or exit("The Script Terminated !!");

        echo "<h3>LINE OF CODE FOR TESTING ..</h3>";
        echo "<h3>LINE OF CODE FOR TESTING ..</h3>";

        echo "<h3>LINE OF CODE FOR TESTING ..</h3>";
        echo "<h3>LINE OF CODE FOR TESTING ..</h3>";
    ?>
</body>
</html>