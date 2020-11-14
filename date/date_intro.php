<?php

    /*
        date_default_timezone_set(timezone) // set the time zone with a specific timezonz
    */

    /*
        date(format, [timestam])
    */

    echo "<h1>Test The Date Lesson !!</h1>";

    echo "<h3>Print the Date Time from my zone</h3>";

    echo date('h i s d-m-y');


    // set the time on the timezone
    date_default_timezone_set('Africa/Cairo');

    echo "<h1>Test The Date Lesson !!</h1>";

    echo "<h3>Print the Date Time from cairo Zone</h3>";

    echo date('h i s d-m-y');

    


?>