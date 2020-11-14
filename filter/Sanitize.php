<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizing The Data</title>
</head>
<body>
    <?php 

        // GET THE DATA FROM THE POST REQUEST
        $email = $_POST['email'];
        $password = $_POST['password'];

        //SANITINZING THE DATA
        $sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $sanitizePassword = filter_var($password, FILTER_SANITIZE_NUMBER_INT);


        echo "<h1>Pinting the data after the sanitize process !</h1>";

        echo "<h3>Email: " . $sanitizeEmail . "</h3>";

        echo "<h3>Password: " . $sanitizePassword . "</h3>";



        // VALIDITION THE DATA

        echo "<h2>Print The Validation Resualt:</h2>";

        //EMAIL VALIDATING
        if(filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL) === TRUE){

            echo "<h3>'" . $sanitizeEmail . "'  => Is a Valid Email !!</h3>";

        }else{

            echo "<h3>'" . $sanitizeEmail . "'  => Is Not a Vaild Email !!</h3>";

        }

        //PASSWORD VALIDATING
        if(filter_var($sanitizePassword, FILTER_VALIDATE_INT) === TRUE){

            echo "<h3>'" . $sanitizePassword . "'  => Is a Valid Password !!</h3>";

        }else{

            echo "<h3>'" . var_dump($sanitizePassword) . "'  => Is Not a Vaild Password !!</h3>";

        }


    ?>
</body>
</html>