<?php 

    // STARTING THE SESSION
    session_start();

    if(empty($_SESSION['counter'])){

        $_SESSION['counter'] = 1;

    }else{

        $_SESSION['counter']++;

    }

?>