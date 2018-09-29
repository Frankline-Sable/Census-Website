<?php
require_once("dbConnect.php");
$email=$_GET["email"];

$sql="SELECT `Username` FROM `users` WHERE `Username`='".$email."'";
$res=$conn->query($sql);

if($res->num_rows>0){
	echo(true);
}else{
	echo(false);
}
$conn->close();
?>



