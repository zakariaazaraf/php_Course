<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniqid</title>
</head>
<body>
    
    <?php 
        /*
            uniqid => unique identifier
            uniqid([str prefix], [bool moreEntropy = FALSE]) : str // Return an id of 13 chracters

            prefix = image_[id], client_[id] ...
            moreEntropy{
                false : 13 char,
                true : 23 char
            }
        */

        echo "<h1>Test the \"uniqid\" Function</h1>";

        echo "<h3>Simple use Id: '" . uniqid() . "'</h3>";

        echo "<h3>Prefix use Id: '" . uniqid('client_'). "'</h3>";

        echo "<h3>More Entropy use Id: '" . uniqid('', TRUE). "'</h3>";

        
    ?>
</body>
</html>