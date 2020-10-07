<?php 

    $indexedArray = array(
        'zakaria',
        "shiame",
        5 => "zzzzzzzzz",
        "majda",
        4 => "hicham",
        "radouane"
    );

    $array = array(
        "zakaria" => "azaraf",
        "imane" => "ben zzzzzz",
        "shaimae" => "en sssssssss",
        "hicham" => "el achari",
        "radouane" => "ait oufkir"
    );

    $multiArray = array(
        array(
            "node" => "low",
            "php" => "averge",
            "python" => "high",
            "python" => "low"
        ),
        array(
            "node" => "averge",
            "php" => "averge",
            "python" => "low"
        ),
        array(
            "node" => "high",
            "php" => "averge",
            "python" => "average"
        )
        );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array
    </title>
</head>
<body>

            

    
    <?php

    //PRINTING THE ASSOCITIVE MULTIDIMENTINAL ARRAY
    echo "<h1>PRINT THE INDEXED ARRAY WITH FORECH</h1>";
    
        foreach($indexedArray as $keykey => $valval){
            echo $keykey . " => " . $valval . "<br>";
        }

    echo "<h1>THE ONE Dimention ASSOCIATIVE ARRAY</h1>";
    echo "<pre>";
    echo print_r($array);
    echo "</pre><br><br>";
    echo "<h1>THE MULTI ASSOCIATIVE ARRAY</h1><pre>";
    echo print_r($multiArray);
    echo "</pre>";

    //$removedItem = array_pop($multiArray[1]);

    //PRINTING THE ASSOCITIVE MULTIDIMENTINAL ARRAY
    echo "<h1>PRINT THE ASSOCIATIVE ARRAY WITH FORECH</h1>";
    foreach($multiArray as $key ){
        echo "<h3>PRITING THIS ARRAY !!!!</h3>";
        foreach($key as $keykey => $valval){
            echo $keykey . " => " . $valval . "<br>";
        }
    }

    echo "<h2>THE ITEM REMOVED : " . $removedItem . "<h2>";
    //print_r($removedItem);

    //TESTING in_array() FUNCTION
    if(in_array("azaraf", $array)){
        echo 'THE VALUE EXIST IN THIS ARRAY';
    }else{
        echo "THE VALUE DOESN'T EXIST IN THIS ARRAY";
    }


    // TESTING THE array_keys() FUNCTION
    echo "<br><h>TESTING THE array_keys() FUNCTION<h1>";
    print_r(array_keys($multiArray[0], "low"));

    ?>
</body>
</html>