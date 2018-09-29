<?php
session_start();
if(isset($_SESSION["username"])){
	$user=$_SESSION["username"];
	if(sessionHasExpired()){
		session_unset();
		session_destroy();
		echo(true);
	}
}else{
	echo("true");
}
function sessionHasExpired(){
	//5 minutes session, hence converting to millisecond
	$sess_duration=5*60*1000;//in ms
	$time1=$_SESSION["loginTime"];//saved login time
	$time2=time();//current time
	
	if(($time2-$time1)>$sess_duration){//check whether tim is done
		echo($time2);
		echo($time1);
		return true;
	}
}
?>