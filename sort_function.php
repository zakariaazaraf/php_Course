<?php

    
    /*
    # SORT_REGULAR - compare items normally; the details are described in the comparison operators section
    # SORT_NUMERIC - compare items numerically
    # SORT_STRING - compare items as strings
    # SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()
    # SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
    # SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively 
    */


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

    $sortArray = array("zakaria", "bbbbbbb", "CCCC", "ccccc", "SSSSSS", "aaaa", "ZZZZZ", "AAAAA");

    $numericArray = array(1,45, 76, 4, 89, 0, 6, 3);
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
         $returnValue = sort($sortArray, SORT_NATURAL | SORT_FLAG_CASE); 
        

        // PRINTING THE SORTED ARRAY
        echo "<h1>PRINTING THE SORTED ARRAY WITH DEFUALT VALUES :) !!!!!</h1>";
        echo "<pre>";
        print_r($sortArray);
        echo "</pre>";

        echo "<h1>The retuened value from the array is : " . $returnValue . "</h1>";


            // PRINTING THE ARRAY AFTER THE THE SORT FUNTION CALL
    echo "<h1>PRINTING THE ARRAY WITH DEFUALT VALUES AFTER THE SORT :) !!!!!</h1>";
        echo "<pre>";
        print_r($numericArray);
        echo "</pre>";

        // CALLING THE sort() FUNCTION
        sort($numericArray, SORT_NORMAL);

        // PRINTING THE SORTED ARRAY
        echo "<h1>PRINTING THE SORTED ARRAY WITH DEFUALT VALUES :) !!!!!</h1>";
        echo "<pre>";
        print_r($numericArray);
        echo "</pre>";
    ?>
</body>
</html>