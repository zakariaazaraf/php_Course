<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upper cases | Lower cases</title>
</head>
<body>
    <?php

    // TEST THE "strtolower" FUNCTION 
    $myString = "I love the php And I wish To do ....";
    echo "<h1>Test the 'strtolower' function !!!</h1>";
    $lower = strtolower($myString);
    echo "<h3>" . $lower . "</h3>";

    // TEST THE "strtoypper" FUNCTION
    echo "<h1>Test the 'strtoupper' function !!!</h1>";
    $upper = strtoupper($myString);
    echo "<h3>" . $upper . "</h3>";

    // TEST THE "lcfirst" FUNCTION => LOWER THE FIRST CHARATER OF THE STRING
    echo "<h1>Test the 'lcfirst' function !!!</h1>";
    $lcfirst = lcfirst($myString);
    echo "<h3>" . $lcfirst . "</h3>";

    // TEST THE "ucfirst" FUNCTION => UPPER THE FIRST THE CHARATER OF THE STRING
    echo "<h1>Test the \"ucfirst\" function !!!</h1>";
    $ucfirst = ucfirst($myString);
    echo "<h3>" . $ucfirst . "</h3>";

    // TEST THE "ucwords" FUNCTION => CAPITALIAIZE THE STRING
    echo "<h1>Test the \"ucwords\" function !!!</h1>";
    $ucwords = ucwords($myString);
    echo "<h3>" . $ucwords . "</h3>";
    ?>
</body>
</html>