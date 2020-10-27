<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode and Emplode</title>
</head>
<body>
    <?php
    $sringTest = "hi there how is it going?";

    echo "<h1>TEST THE EXPLODE FUNTION</h1>";
    echo "<pre>";
    echo print_r(explode(" ", $sringTest, 3));
    echo "</pre>";

    // ARRAY TO TEST THE IMPLODE FUNCTION
    $implodeArray = array("zakaria", "imane", "salma", "shaimae", "radouane", "hicham");
    echo "<h1>TEST THE IMPLODE FUNCTION [RETURN STRING] </h1>";
    echo "<h2>THE TYPE OF RETURN VALUDE IS " . gettype(implode(",", $implodeArray)). "<h2>";
    echo implode("<br>", $implodeArray);
    ?>
</body>
</html>