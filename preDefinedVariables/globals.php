<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>globals variables</title>
</head>
<body>
    
    <?php 
        
        /*
            $GLOBALS[VariableName] // without $ sigin
        */

        $name = "zakaria";

        function globalesTest(){ // YOU CAN'T ACCESS VARIABLES OUTSIDE THE SCOOP, SHOLD USE GLOBALS VARIABLES

            echo "<h3>Print the variable without GLOBALES : '" . $name . "'</h3>";

            echo "<h3>Print the variable with GLOBALES : '" . $GLOBALS["name"] . "'</h3>";

        }

        echo "<h1>Test the \"GLOBALS\" function</h1>";

        globalesTest(); // CALL THE FUNCTION
    ?>
</body>
</html>