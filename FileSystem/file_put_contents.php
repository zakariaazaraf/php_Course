<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file_put_contents</title>
</head>
<body>
    
    <?php 

        /*
            file_put_contents(fileName, data, [mood], context) : int{number of bytes} | false
            mood{
                FILE_APPEN => if the file name allready exists, append data to the file instead of overwriting it,
                LOCK_EX => stop others to have access to the file while you are using it,
                FILE_USE_INCLUDE_PATH => Advanced
            }
            context => Advanced
        */


        // TEST THE "file_put_contents" FUNCTION

        echo "<h1>Test the \"file_put_cotents\" Function !!</h1>";
        if(file_put_contents(__DIR__ . "/testingFile.php", "<?php echo '<h2>The file created and appened succsssfully !!</h2>'; ?>") !== false){
            include __DIR__ . "/testingFile.php";
        }else{
            echo "<h2>The file Confrent problems !</h2>";
        }

        //chmod(__DIR__ ."/testingFile.php", 0444);
    ?>
</body>
</html>