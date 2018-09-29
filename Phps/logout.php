
<?php
echo("redirecting..."); //incase the redirect fails
//if the user requests a logout
//first clear the session, check whether it exists first
session_start();
if(isset($_SESSION["userCk"])){
	// remove all session variables
	session_unset();
	// destroy the session
	session_destroy();
}
header("Location: ../default.html", true, 301);
?>