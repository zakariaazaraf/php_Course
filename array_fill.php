<?php

// DECLARING THE INDEXED ARRAY 
$indexedArray = array(
    "zakaria",
    "hicham",
    "radouane",
    "imane",
    "majda",
    "shaimze"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array fill function</title>
</head>
<body>
    <?php

    // PRINT THE ARRAY BEFORE THE FILL INSTRUCTION 
    echo "<h>print the array before the fill function !!!</h1>";
    echo "<pre>";
    print_r($indexedArray);
    echo "</pre>";

    // USE THE FILL FUNCTION
    $indexedArray = array_fill(2, 3, "zzzzz"); // IT MODIFIES THE ARRAY WITH THE NEWEST VALUES

    // PRINT THE ARRAY AFTER THE FILL FUNCTION
    echo "<h>print the array after the fill function !!!</h1>";
    echo "<pre>";
    print_r($indexedArray);
    echo "</pre>";
    ?>
</body>
</html>