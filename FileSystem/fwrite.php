<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fwrite</title>
</head>
<body>
    
        <?php 
            /*
                fwrite(handle, data, [length]) : int = numberBytes | False
            */

            $file = "Read.txt";
            $resource = fopen($file, "r+");

            $content = fread($resource, filesize($file));

            echo "<h1>Test the \"fwrite\" Fuction</h1>";

            echo "<h3>File Content : '" . $content . "'</h3>";

            fwrite($resource, ", THIS DATA WAS ADDED BY 'fwrite' FUNCTION");
        ?>
</body>
</html>