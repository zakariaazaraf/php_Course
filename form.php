<?php

// CALL THE USER_VATIDATO CLASS
require('user_validator.php');

if(isset($_POST['submit'])){
    echo "<h3>THE FORM HAS SUBMITED !!!</h3>";
    $validation = new UserValidator($_POST); // ENSTANCIAT THE OBJECT
    $validation->validateForm();
    $errors = $validation->errors;
    /* echo "<pre>";
    echo print_r($errors);
    echo "</pre>"; */
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Create new user</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <div class="box">
            <label>Username :</label>
            <input type="text" name="username" value="<?php //echo htmlspecialchars($_POST['username']) ?>"/>    
        </div>
        <div class="error">
            <?php echo $errors['username'] ?? ''?>
        </div>
        
        <div class="box">
            <label>Email :</label>
            <input type ="text" name="email" value="<?php //echo htmlspecialchars($_POST['email']) ?>"/>
        </div>
        <div class="error">
            <?php echo $errors['email'] ?? ''?>
        </div>
        
        <input type="submit" value="submit" name ="submit"/>
    </form>
    </div>
</body>
</html>