<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file_exists</title>
</head>
<body>
    <?php 
        /*
            file_exists(fileName) : bool
            is_writable(fileName) : bool
        */

        $directoryName = dirname(__FILE__); // HOW TO GET THE CURRENT DIRECTORY
        $file = "zakaria.txt";

        echo "<h3>Current Directory : ". $directoryName ."</h3>";

        // TEST THE "file_exists" FUNCTION

        echo "<h1>Test the \"file_exists\" Function !!</h1>";

        if(file_exists($file)){

            echo "<h2>The file exists in this '" . $directoryName . "' directory !!!</h2>";

            // TEST THE "is_writable" FUNCTION 

            echo "<h1>Test the \"is_writable\" Function !</h1>";

            if(is_writable($file)){
                
                file_put_contents($file, "this content writed by PHP function !!");
                echo "<h2>YOUR FILE IS WRITABLE, DATA CREATED SUCCSSFULLY ! :)</h2>";
            }else{
                echo "<h2>SORRY YOUR FILE IS'T WRITABLE :( </h2>";
            }        
            
        }else{
            echo "<h2>The file doesn't exists in this '" . $directoryName . "' directory !!</h2>";
        }
    ?>
</body>
</html>