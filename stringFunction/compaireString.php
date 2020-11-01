<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strcmp | strncmp | strrev</title>
</head>
<body>
    
    <?php 
        /*
            strcmp(firstString, secondString) : int
                0   => They are Equal
                > 0 => The First one Greater Then the Second
                < 0 => The First one Less Then the Second

            strncmp(str1, str2, length) : int => Idem + [lenght = number Of charters to compare]

            strrev(myStr) : string => reverse string
        */

        // TEST THE "strcmp" FUNCTION
        $str1 = "PHP";
        $str2 = "PHP";
        $resault = strcmp($str1, $str2); 

        echo "<h1>Test the \"strcmp\" Function !!!</h1>";
        echo "<h2>The Resualt Of comparing is : " . $resault . " </h2>";

        // TEST THE "strrev" FUNCTION 
        $myStr = "zakaria";
        echo "<h1>Test the \"strrev\" Function !!!</h1>";
        echo "<h2>Reverse of '" . $myStr . "' is : '" . strrev($myStr) . "' </h2>";
    ?>
</body>
</html>