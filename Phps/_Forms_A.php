<?php
require_once('dbConnect.php');

$sql="INSERT INTO tb_citizen(id,_HH_Code, FullNames, DOB, RelationShip, Sex, Tribe, Religion, Marital_St, BithPlace, Prev_Res, Curr_Res, Dur_Res, OrphanHood, Disabilty, TypeDisability, MoreDisability, School, Highest_Level, LevelComp, ActivityLastWeek, Employer, HoursWork) VALUES (NULL,'".$_POST['_HH_Code']."','".$_POST['FullNames']."', '".$_POST['DOB']."', '".$_POST['RelationShip']."', '".$_POST['Sex']."', '".$_POST['Tribe']."', '".$_POST['Religion']."', '".$_POST['Marital_St']."', '".$_POST['BithPlace']."', '".$_POST['Prev_Res']."', '".$_POST['_Curr_Res']."', '".$_POST['Dur_Res']."', '".$_POST['OrphanHood']."', '".$_POST['Disabilty']."', '".$_POST['TypeDisability']."', '".$_POST['MoreDisability']."', '".$_POST['School']."', '".$_POST['Highest_Level']."', '".$_POST['LevelComp']."', '".$_POST['ActivityLastWeek']."', '".$_POST['Employer']."', '".$_POST['HoursWork']."')";

if($conn->query($sql)===TRUE){
	echo("Data Sent Successfully");
}
else{
	echo("failure".$conn->error);
}
$conn->close();

?>