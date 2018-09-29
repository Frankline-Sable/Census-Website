<?php
require_once("dbConnect.php");

session_start();
//before fetching user's data check the session.
if(isset($_SESSION["username"])){
	$user=$_SESSION["username"];
	$sql="SELECT `id`, `First Name`, `Last Name`, `Gender`, `Languages`, `Username`, `Password` FROM `users` WHERE `Username`='".$user."'";
	$res=$conn->query($sql);

	if($res->num_rows>0){


		while($rows=$res->fetch_assoc()){
			$id=$rows['id'];
			$fname=$rows['First Name'];
			$lname=$rows['Last Name'];
			$gend=$rows['Gender'];
			$lang=$rows['Languages'];
			$usern=$rows['Username'];
			$pass=$rows['Password'];
		}
	}else{
		echo(false);
	}
}
else{
	//if session doesnot exist
	header("Location: ../Pages/Login.html", true, 301);
}

$conn->close();
?>



