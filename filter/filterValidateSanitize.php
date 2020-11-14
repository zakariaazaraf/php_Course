<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Validate Vs Sanitize</title>
</head>
<body>
    
    <?php

        /*
            filtervalidate => validate the data, Return boolean value and doesn't chnage the data

            FilterSanitaize => check and remove some charters from the data and resend a new value
        */
    ?>

    <h1>Test The Filter Validate and Sanitize</h1>

    <h2>Inter The Informations To Sanirize & Validate !!</h2>

    <form action="Sanitize.php" method="POST">
        <fieldset>
            <legend>Information :</legend>
            <input type="text" name="email"><br>
            <input type="text" name="password"><br>
            <input type="submit" value="Submit Infos">
        </fieldset>
    </form>
</body>
</html>