<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Values</title>
</head>
<body>
    
    <?php 



        if($_SERVER["REQUEST_METHOD"]){

            if(!empty($_REQUEST)){

                // Get the response value
                $input = $_POST['test'];

                if(filter_var($input, FILTER_VALIDATE_EMAIL)){

                    echo "<h3>You have entered a valid email '" . $input . "'</h3>";

                }else{

                    echo "<h3>You haven't entred a valid email '" . $input ."', Try another one</h3>";

                }

            }else{

                echo "<h2>Sorry we could not validate an empty value </h2>";

            }

        }else{

            echo "<h3>Sorry you couldn't access to this page, You have came from un specidied page</h3>";

        }
    ?>
</body>
</html>