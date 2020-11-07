<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unlink | rmdir</title>
</head>
<body>
    
    <?php 
        /*
            unlink(fileName, [context]) : bool // Remove the file, NB: the file should be writable
            rmdir(directory) : bool // Remove the Directory, NB: the folder sould be empty
        */

        // TEST THE "unlink()" FUNCTION

        $file = "testFile.txt";
        echo "<h1>Test the \"unlink\" function !!</h1>";

        if(file_put_contents($file, "salut! tout le monde cet fichier a été créé par PHP code!!")){
            echo "<h2>well done you just make a new file</h2>";

            if(file_exists($file) && is_writable($file)){

                if(unlink($file)){

                    echo "<h2>You just Removed this file :' " . $file . " '</h2>";

                }else{

                    if(file_exists($file)){

                        echo "<h2>You can't remove this file, you should change the file's mod</h2>";

                    }else{
                        echo "<h2>The file doesn' exists </h2>";
                    }
                    

                }
            }
        }else{
            echo "<h2>you can't make this file try later</h2>";
        }


        //TEST THE "rmdir()" FUNCTION
        $folder = "TestFolder";
        echo "<h1>Test the \"rmdir\" Function</h1>";

        if(mkdir($folder)){ // CREATING THE TEST FOLDER
            echo "<h2>The folder Test created !</h2>";
        }else{
            echo "<h2>The folder failed to create </h2>";
        }

        if(rmdir($folder)){
            echo "<h2>The folder reoved succssfully !!</h2>";
        }else{
            echo "<h2>The folder failed to reove </h2>";
        }
    ?>
</body>
</html>