<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rename | copy</title>
</head>
<body>
    
    <?php 
        /* 
            copy(oldFile, newFile, [context]) :bool => make a compy of the file
            rename(oldName, newName, [context]) :bool => rename including move file
        */

        //TEST THE "copy" FUNCTION

        echo "<h1>Test the \"copy\" function !!</h1>";
        $newName = "ziko.txt";
        $oldName = basename(__DIR__ ."/zakaria.txt");
        
        if(copy(__DIR__ . "/". $oldName, __DIR__. "/" .$newName)){

            echo "<h2>The file copyed from '" . $oldName . "' To '" . $newName . "'</h2>";

        }else{

            echo "<h2>The process of Copying the file failed :( </h2>";
        }


        //Test THE "rename" FUNCTION

        echo "<h1>Test the \"rename\" Function</h1>";

        $oldPath = __DIR__;
        $newPath = __DIR__ . "/../stringFunction/movedFile.txt";

        if(rename($oldPath ."/ziko.txt", $newPath)){

            echo "<h2>File Renamed and Moved :) !! </h2>";
            echo "<h2>From : '" . $oldPath . "' </h2>";
            echo "<h2>To : '" . $newPath . "' </h2>";
            
        }else{

            echo "<h2>Renamed Process failed :( </h2>";
            
        }
    ?>
</body>
</html>