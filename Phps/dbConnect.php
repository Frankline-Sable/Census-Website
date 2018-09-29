<?php
$server="localhost";
$user="root";
$password="";
$db="Census 2018";

$conn=new mysqli($server,$user,$password,$db);
if($conn->connect_error){
	die('Connection error');
}
?>