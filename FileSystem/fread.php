<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fread</title>
</head>
<body>
    
        <?php 
            /*
                fread(handle, length) : string | False 
                handle => a file system pointer resource that is typically created by fopen() function
                length => number of byte, You can Use filesize() Function
            */

            echo "<h1>Test the \"fread()\" Function</h1>";

            $resource = fopen("Read.txt", "r");

            $content = fread($resource, filesize("Read.txt"));

            echo "<h3>File Content : " . $content . "</h3>";
        ?>
</body>
</html>