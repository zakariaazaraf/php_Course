<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sleep | usleep | time_sleep_until</title>
</head>
<body>
    
    <?php 
        /*
            sleep(seconds) // hold on for seconds and continuing the execution
            usleep(microSeconds) Idem,  second = 1M microsecond
            time_sleep_until(float Example) Make the script sleep until a specific time
                            Example => time() + 5
        */

        echo "<h1>Test the sleep functions</h1>";

        echo "<h2>Zakaria</h2>";

        sleep(3);

        echo "<h2>You have been waiting for 3 seconds :) !!</h2>";

        
    ?>
</body>
</html>