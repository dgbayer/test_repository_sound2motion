<?php session_start(); ?>
<?php

	ob_start();
	
	include_once("../Includes/functions/functions.php");
	include_once("../Includes/functions/validation_functions.php");


     
    if (isset($_POST["submit"])) {
    	
    	include("../Includes/db_connect_open.php"); 
        //process form
        //echo "You posted";
        $username = mysql_prep($_POST["username"]);
        
        //validations
        $required_fields = array("username", "password");
        validate_presences($required_fields);
        
        if (!empty($errors)) {
           
        	$_SESSION["errors"] = $errors;
        	if(isset($username)){
        	$_SESSION["username_attempt"] = htmlentities($_POST["username"]);
        	}
        	redirect_to("/FromScratch/Public/sign_up.php");
                    
            
        } else {
        	      

        	 //Perform Create
            
            $username = mysql_prep($_POST["username"]);
            $hashed_password = password_encrypt($_POST["password"]);
            
            $sql = "INSERT INTO `User`(`user_name`, `hashed_pwd`) VALUES ('$username','$hashed_password')";
            
            mysqli_query($connection, $sql);
            	
        	 include("../Includes/db_connect_close.php");
        	 redirect_to("/FromScratch/Public/login.php");
        	 
        }
 
     
       
        
    }else{
        echo "You did not post!!!";
    }
    
    
    
    ob_end_flush();
    
?>