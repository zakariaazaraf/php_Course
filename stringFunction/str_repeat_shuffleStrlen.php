<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_repeat | str_shffle | strlen</title>
</head>
<body>
    <?php

    $myString = "zakaria";

    // TEST THE str_repeat FUNCTION
    $repeate = str_repeat(" ". $myString, 10);
    echo "<h1>Test the repeat function</h1>";
    echo $repeate;

    // TEST THE str_shffle FUNCTION
    $shuffle = str_shuffle($myString);
    echo "<h1>Test the shuffle function !!!</h1>";
    echo $shuffle;

    // TEST THE strlen FUNCTION 
    $numberCaracter = strlen($myString);
    echo "<h1>Test the strlen function</h1>";
    echo "the number of caracters in <h2>" . $myString . "</h2> is : <h2>" . $numberCaracter . "</h2>";
    ?>
</body>
</html>