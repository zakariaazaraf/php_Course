<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_word_count</title>
</head>
<body>
    <?php

    
    $myString = "I love PHP and & also Javascipt";
    // SYNTAX => str_word_count(myString, [returnFormat], [charaterList]);
    /*
                # returnFormat: 0 => defualt return the number of word
                              1 => return an array of words
                              2 => return an associative array where the key is the position of the first char in the str
                # charaterList => example '&' to allow it to be count
    */

    $numberWords = str_word_count($myString);
    $arrayWords = str_word_count($myString, 1);
    $associativeArrayWords = str_word_count($myString, 2, "&");

    // TEST THE "str_word_count" FUNCTION
    echo "<h1>Test the 'str_word_count' function !!</h1>";
    echo "<h2>The number of words in : '". $myString ."' is : ". $numberWords ."</h2>";

    echo "<br /><br /><br />";

    echo "<h2>The words in this sentance : '".$myString."' in an array</h2>";
    echo "<pre>";
    print_r($arrayWords);
    echo "</pre>";

    echo "<br /><br /><br />";

    echo "<h2>The words in this sentance : '".$myString."' counting the \"&\" special char in an associative array</h2>";
    echo "<pre>";
    print_r($associativeArrayWords);
    echo "</pre>";
    ?>
</body>
</html>