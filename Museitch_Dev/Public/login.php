<?php session_start(); ?>
<?php include_once("../Includes/functions/functions.php"); 
?>
<?php include_once("../Includes/functions/validation_functions.php"); 
?>
<?php include_once("../Includes/layouts/header.php"); ?>
            
            
            
        
<div id="main">
    <div id="navigation">
    <h1> Navigation</h1>
    </div>
    <div id="page">
        <h2>Musitch Development</h2>
        <p>Welcome to the Museitch development site.</p>
        <br>
        
        <?php 
        if (isset($_SESSION["errors"])){
        	
			echo "Errors";
			echo form_errors($_SESSION["errors"]);
        }
        include_once("../Includes/forms/login_form.php"); ?>
        <br>
        
    </div>
</div>
<?php include_once("../Includes/layouts/footer.php"); ?>

