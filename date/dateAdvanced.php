<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Advanced</title>
</head>
<body>
    
    <?php 
        /*
            date(format, [timestam]) : str | false
        */

        echo "<h1>How To Format The Date !!!</h1>";

        echo "<h3>The Day's Date: " . date("jS F Y  H:i:s P") . "</h3>";
    ?>
</body>
</html>