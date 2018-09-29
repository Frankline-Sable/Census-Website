<?php

require_once("dbConnect.php");

$user=$_POST["usernm"];

$sql="SELECT `Column_Id`, `Work_Id`, `National_Id`, `Full_Names`, `Email`, `Gender`, `Age`, `AOP`, `Date_Started` FROM `tb_staff` WHERE `Email`='".$user."'";

$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){
 while($row = $result->fetch_assoc()) {
	 echo($row['Work_Id']);
		};
}
else{
	echo(1);
}

?>
