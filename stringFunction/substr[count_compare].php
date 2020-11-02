<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>substr_count | substr_compare</title>
</head>
<body>
    
    <?php 
        /*
            substr_count(myStr, search, [start=0], length) : int => how mush a {searched Value} appears

            substr_compare(mainStr, str2, start, [length], [caseInsenictive = false]) : int 
            Comparing the length of the tow strings
            Returns : {
                 0   => they Are Equals,
                 > 0 => The first greater than the Second,
                 < 0 => the first is less than the Second
                }
        */

        /*****************   TEST THE "substr_count" FUNCTION   *******************************/
        $myStr = "i love PHP, because PHP is fun language to learn, finnally PHP is a great one";

        $searchedValue = "PHP";

        $appears = substr_count($myStr, $searchedValue); // => 3 times
        /* $appears = substr_count($myStr, $searchedValue, 0, 20); */ // => 1 time

        echo "<h1>Test the \"substr_count\" function !!!</h1>";

        echo "<h2>The word '" . $searchedValue . "' Appears " . $appears . " Times.</h2>";


        /*****************   TEST THE "substr_compare" FUNCTION   *******************************/
        $mainStr = "i'm zakaria";
        $mainStr = "i'm zakaria ben salek";
        $secondStr = "zakaria";

        echo "<h1>Test the \"substr_compare\" function !!!</h1>";

        echo "<h2>The function returns : " . substr_compare($mainStr, $secondStr, 4) . "</h2>";

        echo "<h2>The function returns : " . substr_compare($mainStr, $secondStr, 4, 7) . "</h2>";
    ?>
</body>
</html>