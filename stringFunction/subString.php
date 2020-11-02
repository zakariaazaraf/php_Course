<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>substr function</title>
</head>
<body>
    
    <?php 

    /*
            substr(myStr, start, [length])
            NB: length {-} => substract from the string
    */
    // TEST THE "substr" FUNCTION
    $myStr = "i love PHP becuase PHP is a famous language";
    $peice = substr($myStr, 0, 7);

    echo "<h1>Test the \"substr\" Function !!!</h1>";
    echo "<h2>Peice from the string : " . $peice . "</h2>";


    ?>
</body>
</html>