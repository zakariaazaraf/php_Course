<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter inroduction</title>
</head>
<body>
    
    <?php 
        /*
            filter_list() Returns all seportted filters
        */

        echo "<h1>List fo filters</h1>";

        foreach(filter_list() as $filter){

            echo "<h4>" . $filter . "</h4>";
            
        }
    ?>
</body>
</html>