<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fopen</title>
</head>
<body>
    
    <?php 
        
        /*
            fopen(fileName, mode, [useIncludePath], [context]) : resource | false

            mode{
                r => Read only {FILE SHOULD EXISTS},
                r+ => Read & write {FILESHOULD EXISTS},
                w => Write onle & Overwrite File & Create file If doesn't exists,
                w+ => Write & Read & Overwrite File & Create File,
                a => Write & Create file If doesn't exists,
                a+ => Write & Read & Create file If doesn't exists,
                x => Write & Give error if the File Exists,
                x+ => Write & Read & Give error if the File Exists
            }
        */

        $resource = fopen("testFopen.txt", "w");
    ?>
</body>
</html>