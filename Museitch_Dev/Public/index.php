<?php session_start(); ?>
<?php include("../Includes/db_connect_open.php"); 
?>
<?php include("../Includes/functions/functions.php"); ?>
<?php include("../Includes/layouts/header.php"); ?>
            
            
            

<div id="main">
    <div id="navigation">
    <h1> Navigation : TEST</h1>
    </div>
    <div id="page">
        <h2>Musitch Development</h2>
        <p>Welcome to the Museitch development site.</p>
        <br>
        <br>
        <ul>
            <li><a href="/FromScratch/Public/sign_up.php">Create Your Account</a></li>            
            <li><a href="">Do Thing 2 now!</a></li>
            <li><a href="">Do Thing 3</a></li>
        </ul>
    </div>
</div>
<?php var_dump(debug_backtrace()); ?>
<?php include("../Includes/layouts/footer.php"); ?>
<?php include("../Includes/db_connect_close.php"); ?>