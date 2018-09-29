<?php
session_start();

$user=$_SESSION["userCk"];
//$fName=$_SESSION["nameCk"];
$workId=$_SESSION["workCk"];

if(strlen($user)>0){
	echo(1);
}else{
	echo(0);
}
?>
	