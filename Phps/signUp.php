<?php
$fname=$_POST["fName"];
$lname=$_POST["lName"];
$gend=$_POST["gender"];
$lang=$_POST["lang"];
$usern=$_POST["usrName"];
$passw=$_POST["pass"];

require_once('dbConnect.php');
$sql="INSERT INTO `users`(`First Name`, `Last Name`, `Gender`, `Languages`, `Username`, `Password`) VALUES('".$fname."','".$lname."','".$gend."','".$lang."','".$usern."','".$passw."')";

if($conn->query($sql)===TRUE){
	echo("redirecting...");
	header("Location: ../Pages/Login.html", true, 301);
}
else{
	echo("failure");
}
$conn->close();

?>