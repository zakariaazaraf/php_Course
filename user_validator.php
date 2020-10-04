<?php

class UserValidator{

    // DECLARING PROPERTIES
    private $data;
    private static $fields = ['username', 'email'];
    public $errors = [];

    // CONSTRUCTOR
    public function __construct($Postdata){
        $this->data = $Postdata;
    }

    public function validateForm(){

        //CHECK IF ALL FIELDS ARE EXISTS
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not presented in data");
                return;
            }        
        }
        $this->validateUsername();
        $this->validateEmail();
        return $this->errors;
    }

    private function validateUsername(){
        $var = trim($this->data['username']);

        if(empty($var)){
            $this->addError('username', "the username feild cannot be empty");
        }else{
            if(!preg_match('/^[a-zA-Z0-9]{6,20}$/', $var)){
                $this->addError('username', "the username must be 6-20 chars & alphanumeric");
            }
        }
    }

    private function validateEmail(){
        $var = trim($this->data['email']);

        if(empty($var)){
            $this->addError('email', 'the email feild cannot be empty');
        }else{
            if(!filter_var($var, FILTER_VALIDATE_EMAIL)){
                $this->addError('email', "the email aren't valid");
            }
        }
    }

    private function addError($field, $errorMes){
        $this->errors[$field] = $errorMes;
    }
    
}
?>