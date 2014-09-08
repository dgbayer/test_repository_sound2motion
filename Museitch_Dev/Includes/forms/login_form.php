<form name="sign_up" action="login_authenticate.php" method="post">
            
    Username: <input type="text" name="username" value="<?php
	if (isset($_SESSION["username_attempt"])) {
		$string = $_SESSION["username_attempt"];
		echo $string;
}
?>"/>
    <br>
    Password: <input type="password" name="password"/>
    <br>
    <input type="Submit" name="submit" value="Log In"/>
                
        
</form>
            
