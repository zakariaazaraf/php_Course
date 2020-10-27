<?php
$myArray = array(

    "cc" => "cccccccc",
    "ff" => "ffffffff",
    "dd" => "dddddddd",
    "aa" => "aaaaaaaa",
    "ee" => "eeeeeeee",
    "bb" => "bbbbbbbb"
    
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort keys</title>
</head>
<body>
    <h1>TESTING THE RETURN VALUE OF "ksort" FUNCTION </h1>
    <?php 

    /* echo "<h2>the return value is " . var_dump(ksort($myArray)) . "</h2>"; */

    echo "<h2>the return value is " . gettype(array_reverse($myArray)) . "</h2>";

    echo "<h2>print the array after the function call :) !!!</h2>";
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";

    echo "<h2>print the array after the krsort function called :) !!!</h2>";
    echo "<pre>";
    $filledArray = array_fill(0, 10, 2);
    print_r($filledArray);
    echo "</pre>";

    echo "<h1>the sum function :) !!</h1>";
    echo "<h2>the sum of the arrray is : " . array_sum($filledArray). "</h2>";

    $arrayNumbers = array(22, 4, 7, 9, 32, 5);
    echo "<H1>Random values </H1>";
    echo "<pre>";
    echo print_r(array_rand($arrayNumbers, 2));
    echo "</pre>";


    
    ?>
    
    

</body>
</html>