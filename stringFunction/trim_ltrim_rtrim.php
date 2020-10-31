<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trim |ltrim | rtrim</title>
</head>
<body>
    <?php

    /*

    trim(string, charaterList) :string
    Default value trimmed :

    " "
    \n
    \t
    \r
    \0
    \x0B


    */

    // TEST THE "trim" FUNCTION
    $myString = "\x0B \x0B \x0B i love PHP and i will succssed in programming \x0B \x0B \x0B";
    $trimmed = trim($myString);
    echo "<h1>Test the 'trim' function </h1>";
    echo "<h2>Before Trimmed string : " . $myString . "</h2>";
    echo "<h2>After Trimmed string : " . $trimmed . "</h2>";

    // COMPLECTED USE OF "trim"
    $str = "i love PHP and i will succssed in programming";
    $trimAdvance = trim($str, "i love mming");
    echo "<h1>Test the complecate use of 'trim' function </h1>";
    echo "<h2>Before Trimmed string : " . $str . "</h2>";
    echo "<h2>After Trimmed string : " . $trimAdvance . "</h2>";

    //TEST THE "ltrim" FUNCTION DOES'T WORT TO TRY

    //TEST THE "rtrim" FUNCTION DOES'T WORT TO TRY
    ?>
</body>
</html>