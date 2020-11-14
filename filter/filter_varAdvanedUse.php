<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter_var advaned use</title>
</head>
<body>
    
    <?php 

        /* 
            filter_var(value, filter, $opt)
            $opt{
                "options" => array(),
                "flags" => 
            }

            // There's one flag value could pass per option
            // there's multiple options could be passed

        */

        $example1 = array(
            'options' => array('max_range' => 0, 'min_range' => 999),
            'flags' => FILTER_FLAG_ALLOW_HEX
        );

        $example2 = array(
            'options' => array(),
            'flags' => FILTER_FLAG_IPV4
        );

        echo "<h1>Test the filter_var the advanced one !!</h1>";

        echo "<h2>Example 1: For Interger</h2>";

        echo "<pre>";

        print_r($example1);

        echo "</pre>";

        echo "<h2>Example 1: For Interger</h2>";

        echo "<pre>";

        print_r($example2);

        echo "</pre>";
    ?>

    <h2>inter your informations</h2>;

    <form action="check.php" method="POST">
        <input type="text" name="test">
        <input type="submit" value="Submit Form">
    </form>
</body>
</html>