<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_replace</title>
</head>
<body>
    

    <?php

    /*===================================================
    ==================  str_replace  ====================
    ===================================================*/

    //   SYNTAX  =>  str_replace(search, replace, subject, [accurecyCounrOfElement]) 
    // subject can be {array, string} and return the same subject 

    // TEST THE str_replace FUNCTION WITH STRING

    $myString = "I LOVE PHP BECAUSE IT'S AN EASY LANGUAGE AND FUN TO LEARN THIS IS WHY I LOVE PHP";

    $replace = str_replace('PHP', 'javascript', $myString, $numberAcurrecy);

    echo "<h1>Try the the function with string !!</h1>";
    echo "<h2>THE REPLACEMENT SENTENCE </h2>";
    echo "<h3> " . $replace . "</h3>";
    echo "<h3> THE NUMBER OF ACURRENT : " . $numberAcurrecy . "</h3>";


    // TEST THE FUNCTION WITH ARRAY

    $myArray = explode(" ", $myString); // CONVERT THE STRING TO ARRAY

    echo "<h1>Try the function with array !!<h1>";
    echo "<h2>THE ARRAY AFTER THE REPLACEMENT</h2>";
    echo "<pre>";
    echo print_r($myArray);
    echo "</pre>";

    $myArray = str_replace("PHP", "NODE", $myArray); // WE CAN PASS AN ARRAY OF ELEMENT INSTEAD OF "PHP" OR "NODE"

    // $myArray = str_replace(array("PHP"," ","IS","FUN"), "REPLACED", $myArray); 
    // $myArray = str_replace(array("PHP","THE","IS","FUN"), array("php","the","is"), $myArray);
    echo "<h2>THE ARRAY BEFORE THE REPLACEMENT</h2>";
    echo "<pre>";
    echo print_r($myArray);
    echo "</pre>";

    ?>
</body>
</html>