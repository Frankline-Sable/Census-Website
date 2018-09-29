<?php
require_once('dbConnect.php');

$sql="INSERT INTO `tb_emigrants`(`id`, `_HH_Code`,`Respondent`, `FullNames`, `Sex`, `Dob`, `HighestEdu`, `Destination`, `Curr_Res`, `Dept_Year`, `Status`, `Sent_Rem`, `Amount_Rem`, `How_Rem`) VALUES (NULL, '".$_POST['_HH_Code']."', '".$_POST['_Respondent']."', '".$_POST['FullNames']."', '".$_POST['Sex']."', '".$_POST['Dob']."', '".$_POST['HighestEdu']."', '".$_POST['Destination']."', '".$_POST['Curr_Res']."', '".$_POST['Dept_Year']."', '".$_POST['Status']."', '".$_POST['Sent_Rem']."', '".$_POST['Amount_Rem']."', '".$_POST['How_Rem']."')";

if($conn->query($sql)===TRUE){
	echo("Cool");
}
else{
	echo("failure".$conn->error);
}
$conn->close();

?>

