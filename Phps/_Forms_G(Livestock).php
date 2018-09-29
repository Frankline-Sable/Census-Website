<?php
require_once('dbConnect.php');
$sql="INSERT INTO `tb_livestock`(`id`, `_HH_Code`, `Livestock`) VALUES (NULL,'".$_POST['_HH_Code']."','".$_POST['LVStock']."')";

 if($conn->query($sql)===TRUE){
	echo("cool");
}
else{
	echo("failure".$conn->error);
}
$conn->close();

?>
