<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mkdir | rmdir | is_dir</title>
</head>
<body>
    
    <?php 
    /*
        mkdir(fileName) : bool
        rmfir(fileNamz) : bool 
        is_dir(fileName) : bool 
    */

    $file = "mkDirectory";

    //TEST THE "mkdir" FUNCTION
    echo "<h1>Test the \"mkdir\ function !!</h1>";

    if(mkdir($file)){

        echo "<h2>The File created succssfully !</h2>";

    }else{

        echo "<h2>The file didn't created succssfully (: </h2>";

    }



    // TEST THE  "rmdir" FUNCTION
    echo "<h1>Test the \"rmdir\" function !!</h1>";

    if(file_exists($file)){

        echo "<h2>The file '" . $file. "' exists in this directory !</h2>";

        if(rmdir($file)){

            echo "<h2>The file " . $file . " was removed succssfully :) !</h2>";

        }else{

            echo "<h2>The file " . $file . "' wasn't removed succssfully (: !</h2>";

        }

    }else{

        echo "<h2>The file '" . $file. "' doesn't exists in this directory !</h2>";

    }

    // TEST THE "is_dir"  function

    echo "<h1>Test the \"is_dir\ Function !!</h1>";

    if(is_dir("zakaria.txt")){

        echo "<h2>The file is a dirctory !</h2>";

    }else{

        echo "<h2>The file isn't a directory !</h2>";
    }


    ?>
</body>
</html>