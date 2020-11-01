<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strpos | stripos | strrpos | strripos </title>
</head>
<body>
    
    <?php 

    /*
        strpos(myStr, searchValue, [offset = 0]) : int | false => "SEARCH FOR A VALUE AND RETURN THE POSSTION"

        stripos(myStr, searchValue, [offset = 0]) : int | false => "IDEM BUT IT IS CASE-INSENISTIVE"

        strrpos(myStr, searchValue, [offset = 0]) : int | false => "IDEM BUT STARTS FROM THE END"

        strripos(myStr, searchValue, [offset = 0]) : int | false => "IDEM BUT CASE-INSENISTIVE"
    */

    // TEST THE "" FUNCTION 
    $myStr = "I love PHP because it's fun to learn, PHP is one of the famous language";

    $searchWord = "PHP";

    $wordPostion = strpos($myStr, "PHP");

    echo "<h1>TEST THE 'strpos' FUNCTION !!!</h1>";

    echo "<h2>The postion of '". $searchWord ."' is : " . $wordPostion . "</h2>";

    // TEST THE "strrpos" FUNCTION
    $wordPostion = strrpos($myStr, "PHP");

    echo "<h1>TEST THE 'strrpos' FUNCTION !!!</h1>";

    echo "<h2>The postion of '". $searchWord ."' is : " . $wordPostion . "</h2>";
    ?>
</body>
</html>