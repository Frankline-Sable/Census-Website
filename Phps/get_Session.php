<?php
session_start();

if(isset($_SESSION["userCk"])){

$resArray=array();
array_push($resArray,array('userCk'=>$_SESSION["userCk"],'nameCk'=>$_SESSION["nameCk"], 'workCk'=>$_SESSION["workCk"]));
	
echo(json_encode(array("staffData"=>$resArray)));
}
else{
	echo(false);
}
?>