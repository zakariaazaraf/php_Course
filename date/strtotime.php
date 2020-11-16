<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strtotime</title>
</head>
<body>

    <?php 

        /* date_default_timezone_set('Africa/Casablanca') */

        /*
            strtotime(str stringTime, [time = now])

            stringTime{
                + x [Hour, Day, Week, Month, Year],
                next [Hour, Day, Week, Month, Year],
                last [Hour, Day, Week, Month, Year],
                - x [[Hour, Day, Week, Month, Year]
            }
        */

        echo "<h1>Test the \"strtotime\" Function !!!</h1>";

        // GET THE CURRENT TIME

        $dateNow = date('H:i:s jS F Y');

        echo "<h3>Time Now: " . $dateNow . "</h3>";

        // SET AND PLAY WITH THE TIME USING "strtotime"

        echo "<h2>Setting the time !!</h2>";


        $dateNow = strtotime('-1 Hour 30 Minute');

        echo "<h3>Time Seted: " . date('H:i:s l F Y', $dateNow) . "</h3>";

        

    ?>
    
</body>
</html>