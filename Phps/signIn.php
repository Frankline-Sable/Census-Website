<?php

require_once("dbConnect.php");

$user=$_POST["usernm"];
$pass=$_POST["pass"];

$sql="SELECT `Column_Id`, `Work_Id`, `National_Id`, `Full_Names`, `Email`, `Gender`, `Age`, `AOP`, `Date_Started` FROM `tb_staff` WHERE `Email`='".$user."'&& `Work_Id`='".$pass."'";

$result=mysqli_query($conn,$sql);
$store=array();

$user;$names;$workid;

if(mysqli_num_rows($result)>0){
	
	while($rows=mysqli_fetch_array($result)){
		array_push($store, array("_Column_Id"=>$rows["Column_Id"], "_Work_Id"=>$rows["Work_Id"], "_National_Id"=>$rows["National_Id"], "_Full_Names"=>$rows["Full_Names"], "_Email"=>$rows["Email"], "_Gender"=>$rows["Gender"], "_Age"=>$rows["Age"], "_AOP"=>$rows["AOP"], "_Date_Started"=>$rows["Date_Started"]));
		
		$user=$rows["Email"];
		$names=$rows["Full_Names"];
		$workid=$rows["Work_Id"];
	}
	echo(json_encode(array("staffData"=>$store)));
	createCookie($user, $names, $workid);
	
}
else{
	echo(1);
}

function createCookie($user,$fName,$workId){
	$cookieName1="userCk";
	$cookieName2="nameCk";
	$cookieName2="workCk";
	setcookie($cookieName1, $user,(time()+86400),"/");
	setcookie($cookieName2, $fName,(time()+86400),"/");
	setcookie($cookieName2, $workId,(time()+86400),"/");
	
	createSession($user, $fName, $workId);
}
function createSession($user, $fName, $workId){
	session_start();
	$_SESSION["userCk"]=$user;
	$_SESSION["nameCk"]=$fName;
	$_SESSION["workCk"]=$workId;
}

mysqli_close($conn);
?>












