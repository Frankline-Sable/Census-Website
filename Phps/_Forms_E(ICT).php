<?php
require_once('dbConnect.php');

$sql="INSERT INTO `tb_ict`(`id`, `_HH_Code`, `accessibility`, `Frequency`, `PlaceFAccess`) VALUES (NULL,'".$_POST['_HH_Code']."','".$_POST['accessibility']."','".$_POST['Frequency']."','".$_POST['PlaceFAccess']."')";

 if($conn->query($sql)===TRUE){
	echo("cool");
}
else{
	echo("failure".$conn->error);
}
$conn->close();

?>
