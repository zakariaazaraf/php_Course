<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addslashes | stripslashes | striptags </title>
</head>
<body>
    
    <?php

    // TEST THE addslashes FUNCTION 
    $myString = "i love php, it's 7 o'clock !!";
    $striped = addslashes($myString);
    echo "<h1>Test the addslashes function </h1>";
    echo $striped;

    // TEST THE stripslashes FUNCTION 
    $cleanedString = stripslashes($striped);
    echo "<h1>Test the stripslashes function </h1>";
    echo $cleanedString;

    // TEST THE strip_tags FUNCTION 
    echo "<h1>Test the strip_tags</h1>";
    $strTags = "i love <b>PHP</b> from <a href='php.net'>Link</a>, the <i>PHP</i> manuel";
    echo $strTags;
    echo "<br>" . strip_tags($strTags, "<b><i>"); // TEH SECOND PARA IS OPTIONAL
    ?>
</body>
</html>