
        
<?php

    
 //CREATE DATABASE CONNECTION
    define("DB_SERVER", "localhost");
    define("DB_USER","root");
    define("DB_PASS","root");
    define("DB_NAME","sound2mo_bayerweiss2");
    
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, 8889);
    
//TEST THE DATABASE CONNECTION
    if(mysqli_connect_errno()) {
        die(
            "Database connection failed: " .
            mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
        );
    }
    
 ?>
                      
       
        
