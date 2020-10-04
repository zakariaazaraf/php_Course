<?php

class User{

    //PROPERTIES
    private $firstName;
    private $lastName;
    private $age;

    //CONSTRUCTOR
    public function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // CLONE MAGIC FUNCTION, CALLED WHEN AN OBJECT CLONED => A COPY OF IT
    public function __clone(){ 

        /* $this->setFirstName($this->firstName .="CLONE");
        $this->setFirstName($this->firstName .="CLONE");
        $this->setFirstName($this->firstName .="CLONE"); */

        $this->firstName .= 'CLONED';
        $this->lastName .= 'CLONED';
        
    }

    /*-----------------------------------------------
    -------------------  GETTERS  -------------------
    -------------------------------------------------*/

    public function getFirstName(){ // GET THE FIRST NAME PROPERTY
        return $this->firstName;
    }

    public function getLastName(){ // GET THE THE LAST NAME PROPERTY
        return $this->lastName;
    }

    public function getAge(){ // GET THE AGE PROPERTY
        return $this->age;
    }

    /*-----------------------------------------------
    -------------------  SETTERS  -------------------
    -------------------------------------------------*/

    public function setFirstName($value){ // SET THE FIRST NAME PROPERTY
        $this->firstName = $value;
    }

    public function setLastName($value){ // SET THE LAST NAME PROPERTY
        $this->lastName = $value;
    }

    public function setAge($value){ // SET THE AGE PROPERTY
        if($value > 0){
            if($value <25){
                $this->age = $value;
            }
        }
        
    }
   

    //FUNCTION SHOW DETAILS
    public function showProperties(){
        return "my name's $this->firstName $this->lastName and i'm $this->age yers old";
    }
}


/*----------------------------------------------------------
--------------  STATIC PROPERTIES/METHODES  ----------------
----------------------------------------------------------*/

class Currency{

    // STATIC PROERTIES
    public static $countries = ['DH', '$'];

    public static function dirhamToDollar($dirham){
        return $dirham . self::$countries[0] . " = " . $dirham / 10 . self::$countries[1]; // HOW TO CALL STATIC PROPERTIES
    }

    public static function dollarToDirham($dollar){
        return $dollar . self::$countries[1] . " = " . $dollar * 10 . self::$countries[0]; // HOW TO CALL STATIC PROPERTIES
    }
}

// THE INHERITANCE FROM THE PARENT CLASS {USER}
class AdminUser extends User{

    // THE PROPERTIES
    private $role;

    // THE CONSTRUCTORS
    public function __construct($firstName, $lastName, $age, $role){
        // CALL THE CONSTRUCTOR FROM THE PARENY CLASS IN ORDER TO USE THIER PROPERTY IN THE CHILD CONSTUCTOR
        parent::__construct($firstName, $lastName, $age);

        $this->role = $role;
        
    }

    //DECONSTRUCTOR ALSO CALLED A MAGIC FUNCTION
    public function __destruct(){
        echo "<br>THE OBJECTS ARE DESTRUCTED !!!";
    }


    // setters
    public function getRole(){
        return $this->role;
    }

    // getters
    public function setRole($value){
        $this->role = $value;
    }

    // DECLARING FUNCTIONS AND OVERIDE THE PARENT FUNCTION
    public function showProperties(){
        return parent::showProperties() . " and i'm the " .$this->role . " of the website :) !!!";
    }


    /* // ALSO GET INFO FROM THE PARENT CLASS
    public function test(){
        return "full name : " . parent::getFirstName() . " " . parent::getLastName() . "<br>" . 
                "age : " . parent::getAge() . "<br>". 
                "role : " . $this->role;
    } */
}




$user = new User('zakaria', 'azaraf', 23);
$admin = new AdminUser('hicham', 'el bachari', 26, 'Admin');


echo "<h3>THE VALUES BEFORE THE SETTERS CALLED</h3>";
echo $user->showProperties();

//THE USE OF THE SETTERS
$user->setFirstName("imane");
$user->setLastName("jarkmane");
$user->setAge(21);

echo '<h3>THE VALUES AFTER THE SETTERS CALLED</h3>';
echo $user->showProperties();

echo '<h2>THE VALUES OF THE INHERTIANCE USER</h2>';
echo "THE FIRST NAME : ". $admin->getFirstName() . "<br>";
echo "THE LAST NAME : ". $admin->getlastName() . "<br>";
echo "THE AGE : ". $admin->getAge() . "<br>";
echo "THE ROLE : ". $admin->getRole() . "<br>";

//CALLING THE OVERRIDE FUNCTION 
echo "<h2>THE OVERRIDE FUNCTION :) !!!</h2>";
echo $admin->showProperties();
/* echo $admin->test(); */

//CLONING AN OBGECT
$userClone = clone $user;
echo $userClone->showProperties();


echo "<h2>STATIC PROPERTIES AND METHODS :) !!!</h2>";
echo Currency::dirhamToDollar(1200) . "<br>";
echo Currency::dollarToDirham(200) . "<br>";


?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>
</head>
<body>
    
</body>
</html>