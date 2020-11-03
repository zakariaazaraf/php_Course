<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file_get_contents</title>
</head>
<body>
    
    <?php 
        // file_get_contents(fileName, [includePath], [context], [offset=0], [maxLength])

        //TESTING THE "file_get_contents" FUNCTION

        $fileName = 'Read.txt';
        file_put_contents($fileName, "Data created by PHP function"); // CREATE FILE TO YESY THEMAIN FUNCTION

        //$data = file_get_contents(__DIR__ . "/". $fileName, false, NULL);

        $data = file_get_contents(__DIR__ . "/". $fileName, false, NULL, 16, 3);

        echo "<h1>Test the \"file_get_contents\"function</h1>";

        echo "<h2>File data : '" . $data . "'</h2>";
    ?>
</body>
</html>