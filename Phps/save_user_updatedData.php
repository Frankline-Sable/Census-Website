<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gend=$_POST["gend"];
$lang=$_POST["lang"];
$usern=$_POST["usrname"];
$passw=$_POST["pass"];

require_once('dbConnect.php');
$sql="UPDATE `users` SET `First Name`='".$fname."',`Last Name`='".$lname."',`Gender`='".$gend."',`Languages`='".$lang."',`Password`='".$passw."' WHERE `Username`='".$usern."'";

if($conn->query($sql)===TRUE){
	echo(true);
}
else{
	echo(false);
}
$conn->close();

?>