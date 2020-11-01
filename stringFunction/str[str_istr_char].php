<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strstr | stristr | strchar</title>
</head>
<body>
    
    <?php 

        /*
            strstr(muStr, searchValue, [bool beforeSearch]) : string[portionOfString] | false
            => return string start from the search value if BeforeSearch = false != if the True

            stristr() IDEM but caseInsenictive

            strchar() Alias Of "strstr"

        */

        // TEST THE "strstr" FUNCTION 
        $myStr = "i love php, and PHP is a cool language !!";

        $PortionStr = strstr($myStr, "PHP");

        echo "<h1>Test the \"strstr\" Function !!</h1>";

        echo "<h2>Portion : " . $PortionStr . "</h2>";

        $PortionStr = strstr($myStr, "PHP", true);

        echo "<h1>Test the \"strstr\" Function, BeforeSearch = True !!</h1>";

        echo "<h2>Portion : " . $PortionStr . "</h2>";
    ?>
</body>
</html>