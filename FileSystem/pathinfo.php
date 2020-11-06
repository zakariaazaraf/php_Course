<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pathinfo</title>
</head>
<body>
    
        <?php 

            /*
                pathinfo(path, [whichInfo]) : array // => Return an array of informations about the path
                whichInfo{
                    PATHINFO_DIRNAME,
                    PATHINFO_BASEBAME,
                    PATHINFO_FILENAME,
                    PATHINFO_EXTENSION
                }
            */

            // TEST THE "fileinfo" FUNCTION
            echo "<h1>Test the \"pathinfo()\" function !!</h1>";
            
            $infos = pathinfo(__FILE__);

            echo "<pre>";

            echo print_r($infos);

            echo "</pre>";

            echo "<h1>Show infos separately !!</h1>";

            echo "<h2>".
            $infos["dirname"]. "<br>" .
            $infos["basename"] . "<br>" .
            $infos["filename"] . "<br>" .
            $infos["extension"] . "<br>"
            ."</h2>";

        ?>
</body>
</html>