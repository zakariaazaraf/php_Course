<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parse_str | nl2br </title>
</head>
<body>
    <?php 

        //TEST THE "parse_str" FUNCTION => PARSE A LINK TO VARIABLE OR AN ASSOCIATIVE ARRAY
        // SYNTAX => parse_str(muString, [declarArray]);
        // LINK => name=zakaria&age=22&location=moroco&expertise=advanced

        $myLink = "name=zakaria&age=22&location=moroco&expertise=advanced";

        //TEST THE "parse_str() VARIABLE VERSION"
        parse_str("name=zakaria&age=22&location=moroco&expertise=advanced");
        echo "<h1>Test the parse_str function, VARIABLE VERSION !!!</h1>";
        echo $name . "<br>";
        echo $age . "<br>";
        echo $location . "<br>";
        echo $expertise . "<br>";


        //TEST THE "parse_str() VARIABLE VERSION"
        parse_str("name=zakaria&age=22&location=moroco&expertise=advanced", $myArray);
        echo "<h1>Test the parse_str function, Array VERSION !!!</h1>";
        echo "<pre>";
        echo print_r($myArray);
        echo "</pre>";

        // TEST THE "nl2br" FUNCTION
        $myStr = "i love PHP \n\n Node.js \n\n Javascript";
        $convertNewLinesToBr = nl2br($myStr, true);
        echo $convertNewLinesToBr; // Inspect to see the resualt
        


        
    ?>
</body>
</html>