<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fseek</title>
</head>
<body>
    
    <?php 
        /*
            fseek(resource, offset, [whence = SEEK_SET]) : 0 {success} | -1 
            whence{
                SEEK_SET => the default one, set the postion to the begining,
                SEEK_CUR => set the postion to the currecnt one,
                SEEK_END => set the postion to the enf of the file
            }

            fclose(resource) : bool
        */

        // TEST THE "fseek" FUNCTION

        echo "<h1>Test the \"fseek\" function !!</h1>";

        $fileName = "Read.txt";

        $resource = fopen($fileName, "r+"); // OPENING THE FILE

        echo "<h3>Content BEFORE function's call : '" . fread($resource, filesize($fileName)) . "'</h3>";

        fseek($resource, 3); // PUT THE POINTER TO THE NUMBER 3 POSTION

        fwrite($resource, "A");

        fseek($resource, 0); // RESET THE POSTION TO THE BEGINING

        echo "<h3>Content AFTER function's call : '" . fread($resource, filesize($fileName)) . "'</h3>";

        fclose($resource); // CLOSE THE FILE
    ?>
</body>
</html>