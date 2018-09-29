<?php
require_once('dbConnect.php');

$sql="INSERT INTO `tb_females`(`id`, `_HH_Code`, `Live_Births`, `Children_Alive`, `Children_HH`, `Children_ElseWhere`, `Dead_Child`, `Last_Born_Date`, `LB_Notified`, `LB_Sex`, `LB_Survival_Stats`) VALUES (NULL, ".$_POST['_HH_Code'].", '".$_POST['Live_Births']."', '".$_POST['Children_Alive']."', '".$_POST['Children_HH']."', '".$_POST['Children_ElseWhere']."', '".$_POST['Dead_Child']."', '".$_POST['Last_Born_Date']."', '".$_POST['LB_Notified']."', '".$_POST['LB_Sex']."', '".$_POST['LB_Survival_Stats']."')";

if($conn->query($sql)===TRUE){
	echo("Cool");
}
else{
	echo("failure".$conn->error);
}
$conn->close();

?>

