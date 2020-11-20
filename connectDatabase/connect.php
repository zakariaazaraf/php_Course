<?php

    // CONNECT TO DATABASE USING "PDO" EXTENSION


    $databaseSourceName = 'mysql:host=localhost;dbname=zakaria';
    $dsn = 'mysql:host=localhost;dbname=zakaria';

    $user = 'root';

    $password = '';
    $pass = '';

    $options = array (
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );

    // START TESTING THE CONNECTION
    echo "<h1>Test The Connection To Databases With mysql Using PDO extension</h1>";

    try{

        $db = new PDO($dsn, $user, $pass, $options);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<h2>Connected Successfully To Database !!</h2>";


        // INSERT A QUERY TO DATABASE
        $q = "insert into products values (NULL, 'منتح من المنتجات')";
        //$q = "delete from products";
        
        // EXECUTE THE QUERY
        $db->exec($q);

        // HOW TO GET DATA FROM THE DATABASE
        foreach($db->query('select * from products') as $row){

            echo $row[0] . " " . $row[1] . "<br>";

            //echo $row['id'] . " " . $row['productName'] . "<br>"; 

        }

    }catch(PDOException $e){

        echo "<h2>Failed To Connect To Database .<br>" . $e->getMessage() . "</h2>";

    }