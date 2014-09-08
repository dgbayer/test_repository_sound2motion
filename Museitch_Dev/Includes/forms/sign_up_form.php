<link href="css/public.less" rel="stylesheet" type="text/css" />
<form id="form" name="sign_up" action="sign_up_authenticate.php" method="post">
            
    <td>Username:</td> <td><input type="text" name="username" value="<?php
	if (isset($_SESSION["username_attempt"])) {
		$string = $_SESSION["username_attempt"];
		echo $string;
		$_SESSION["username_attempt"] = null;
}
?>"/></td>
    <br>
 	Email: <input type="text" name="email" value="<?php
	if (isset($_SESSION["email_attempt"])) {
		$string = $_SESSION["email_attempt"];
		echo $string;
		$_SESSION["email_attempt"] = null;
}   
?>"/>
    <br>
    Password: <input type="password" name="password"/>
    <br>
	Retype Password: <input type="password" name="password2"/>
    <br>
    <input id="signup_submit_button"type="Submit" name="submit" value="Sign Up!"/>
                
        
</form>
            
