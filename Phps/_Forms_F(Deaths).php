<?php
require_once('dbConnect.php');
$sql="INSERT INTO `tb_deaths`(`id`, `_HH_Code`, `Dec_Relation`, `Death_Note`, `Age`, `Sex`, `Cause`) VALUES (NULL,'".$_POST['_HH_Code']."','".$_POST['Dec_Relation']."','".$_POST['Death_Note']."','".$_POST['Age']."','".$_POST['Sex']."','".$_POST['Cause']."')";

 if($conn->query($sql)===TRUE){
	echo("Cool");
}
else{
	echo("failure".$conn->error);
}
$conn->close();

?>
