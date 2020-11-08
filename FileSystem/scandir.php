<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scandir</title>
</head>
<body>
    
    <?php 

        /*
            scandir(Directory, [sorting], [context]) : array | false // array of filenames and directories

            sorting{
                SCANDIR_SORT_ASCENDING => default one, it sort alphabetical and ascending,
                SCANDIR_SORT_DESCENDING => alphabetical and descending sort,
                SCANDIR_SORT_NONE => unsorted
            }
        */

        function createFiles($path){

            // create Files
            file_put_contents($path . "/fileText.txt", "File for scandir Testing Function");
            file_put_contents($path . "/cssFile.css", "File for scandir Testing Function");
            file_put_contents($path . "/htmlFile.html", "File for scandir Testing Function");
            file_put_contents($path . "/JavaScript.js", "File for scandir Testing Function");
            file_put_contents($path . "/phpFile.php", "File for scandir Testing Function");

            //create Directory

            // mkdir($path . "/dirTest"); YOU SHOULD CHECK IF THE DIR EXISTS
            // mkdir($path . "/zikoDir"); YOU SHOULD CHECK IF THE DIR EXISTS
        }

        // TEST THE "scandir()" FUNCTION
        echo "<h1>Test the \"scandir()\" Function !!</h1>";

        // create a directory to Test 
        $dirTest = __DIR__ . "/dirTestScandir";



        if(file_exists($dirTest)){ // CHECK IF THE FILE EXISTS, IF NOT CREATE ONE
            echo "<h3>This file exists !!!</h3>";

            // Call createFiles Function
            createFiles($dirTest);

        }else{
            if(mkdir($dirTest)){
                echo "<h3>The directory created successfully !!</h3>";
                // Call createFiles Function
                createFiles($dirTest);
            }else{
                echo "<h3>the file confront some difficulties !</h3>";
            }
        }

        echo "<h2>Scanning the file</h2>";
        $files = scandir($dirTest);
        /* $files = scandir($dirTest, SCANDIR_SORT_DESCENDING);
        $files = scandir($dirTest, SCANDIR_SORT_NONE); */

        echo "<pre>";

        print_r($files);

        echo "</pre>";

        //REOMOVE JUST FILES

        foreach($files as $file){
            if(is_file($dirTest . "/" . $file)){
                echo "<h3>This's a File,   Name : " . $file . "</h3>";

                if(unlink($dirTest . "/" . $file)){
                    echo "<h5>This file Removed</h5>";
                }
            }
        }
    ?>
</body>
</html>