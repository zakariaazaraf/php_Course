<?php

    // DECLARING THE ARRAY
    $myArray = array(
        "zakaria",
        "10",
        "zakaria11",
        10,
        "22imane",
        123
    );
    /* $sortArray = array("zakaria", "hicham", "imane", "malak", "radouane", "12", "ZakaRia"); */

    $sortArray = array("zakaria", "bbbbbbb", "CCCC", "ccccc", "SSSSSS", 12, "aaaa", "ZZZZZ", "AAAAA");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sort function</title>
</head>
<body>
    <?php

        // PRINTING THE ARRAY AFTER THE THE SORT FUNTION CALL
    echo "<h1>PRINTING THE ARRAY WITH DEFUALT VALUES AFTER THE SORT :) !!!!!</h1>";
        echo "<pre>";
        print_r($sortArray);
        echo "</pre>";

        // CALLING THE sort() FUNCTION
         $returnValue = sort($sortArray, SORT_NATURAL); 
        

        // PRINTING THE SORTED ARRAY
        echo "<h1>PRINTING THE SORTED ARRAY WITH DEFUALT VALUES :) !!!!!</h1>";
        echo "<pre>";
        print_r(array_keys($sortArray));
        echo "</pre>";

        echo "<h1>The retuened value from the array is : " . $returnValue . "</h1>";


            // PRINTING THE ARRAY AFTER THE THE SORT FUNTION CALL
    echo "<h1>PRINTING THE ARRAY WITH DEFUALT VALUES AFTER THE SORT :) !!!!!</h1>";
        echo "<pre>";
        print_r($myArray);
        echo "</pre>";

        // CALLING THE sort() FUNCTION
        sort($myArray);

        // PRINTING THE SORTED ARRAY
        echo "<h1>PRINTING THE SORTED ARRAY WITH DEFUALT VALUES :) !!!!!</h1>";
        echo "<pre>";
        print_r($myArray);
        echo "</pre>";
    ?>
</body>
</html>