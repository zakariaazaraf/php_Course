<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter_var basic</title>
</head>
<body>
    
    <?php 
        /*
            filter_var(mixed variable, [filter], [mixed options])
            => ecah filter has a number of option
        */

        echo "<h1>Test the \"filter_var\" function  !</h1>";
    ?>

    <!-- FORM TO TEST THE filter_var FUNCTION -->
    <form action="check.php" method="POST">
        <input type="text" name="test">
        <input type="submit" value="Send">
    </form>

</body>
</html>