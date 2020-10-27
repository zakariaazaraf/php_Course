<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str and chunk split</title>
</head>
<body>
    <?php

    // TEST THE str_split FUNCTION
    echo "<h1>Test str_split function</h1>";
    $stringTest = "zakaria azaraf :)";
    echo "<pre>";
    echo print_r(str_split($stringTest, 2)); // SPLIT IT IN TOWS CARACTERS
    echo "</pre>";

    // TEST THE chunk_split FUNCTION 
    echo "<h1>Test shunck_split function</h1>";
    $stringTest = "zakaria azaraf :)";
    echo "<pre>";
    echo print_r(chunk_split($stringTest, 3, " :)<br>")); // SPLIT IT IN TOWS CARACTERS
    echo "</pre>";
    echo "<h2>chunk function return value " . gettype(chunk_split($stringTest, 3)). "</h2>";
    ?>
</body>
</html>