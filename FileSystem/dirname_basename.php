<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dirname | basename</title>
</head>
<body>
    
    <?php 
        /*
            Magic Constant {
                __DIR__  => current directoy path,
                __FILE__ => Current file path
            }

            dirname(path) === __DIR__ => return the parent directory of a path
            basename(path,[str suffix]) => file name{
                if the suffix correct => return just the name without the suffix,
                else => return the file with his suffix
            }
        */

        echo "<h1>Test the \"dirname\" Function !</h1>";
        echo "<h2>Give me the current directory name : '" . dirname(__FILE__) . "'</h2>"; 

        echo "<h1>Test the \"basename\" Function !</h1>";
        echo "<h2>Give me the current file name with the Suffix : '" . basename(__FILE__) . "'</h2>";
        echo "<h2>Give me the current file name without the Suffix : '" . basename(__FILE__, ".php") . "'</h2>";
        echo __DIR__ . "<br>";
        echo __FILE__;
    ?>
</body>
</html>