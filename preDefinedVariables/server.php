<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>

    <?php 
        /*
            $_SERVER["Indices"] => is an array containing informations such as headers, paths, script locations, the entries 
            created by the server
        */


        // THE SERVER'S INDICES
        $indicesServer = array('PHP_SELF',
            'argv',
            'argc',
            'GATEWAY_INTERFACE',
            'SERVER_ADDR',
            'SERVER_NAME',
            'SERVER_SOFTWARE',
            'SERVER_PROTOCOL',
            'REQUEST_METHOD',
            'REQUEST_TIME',
            'REQUEST_TIME_FLOAT',
            'QUERY_STRING',
            'DOCUMENT_ROOT',
            'HTTP_ACCEPT',
            'HTTP_ACCEPT_CHARSET',
            'HTTP_ACCEPT_ENCODING',
            'HTTP_ACCEPT_LANGUAGE',
            'HTTP_CONNECTION',
            'HTTP_HOST',
            'HTTP_REFERER',
            'HTTP_USER_AGENT',
            'HTTPS',
            'REMOTE_ADDR',
            'REMOTE_HOST',
            'REMOTE_PORT',
            'REMOTE_USER',
            'REDIRECT_REMOTE_USER',
            'SCRIPT_FILENAME',
            'SERVER_ADMIN',
            'SERVER_PORT',
            'SERVER_SIGNATURE',
            'PATH_TRANSLATED',
            'SCRIPT_NAME',
            'REQUEST_URI',
            'PHP_AUTH_DIGEST',
            'PHP_AUTH_USER',
            'PHP_AUTH_PW',
            'AUTH_TYPE',
            'PATH_INFO',
            'ORIG_PATH_INFO') ; 

        
        
        // PRINT SERVER'S INDECES 
        echo "<h1>Print the server's indices  </h1>";

        foreach($indicesServer as $indice){
            
            echo "<h2>Server Indice : '" . $indice . "'</h2>";
            
        }

        // PRINT INDECES AND THEIR VALUES
        echo "<h1>Print the server's indices and thier values </h1>";

        foreach($indicesServer as $indice){
            echo "<h3>Server Indice : '" . $indice . "'</h3>";
            
            echo "<h5>Indice Value '" . $_SERVER[$indice] . "'</h5>";
        }
    ?>
</body>
</html>