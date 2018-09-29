<?php

require_once("dbConnect.php");

$workId=$_POST["workId"];

$sql="SELECT `id`, `_HH_Code`, `Respondent`, `FullNames`, `Sex`, `Dob`, `HighestEdu`, `Destination`, `Curr_Res`, `Dept_Year`, `Status`, `Sent_Rem`, `Amount_Rem`, `How_Rem` FROM `tb_emigrants`  WHERE `_HH_Code`=".$workId;

$result=mysqli_query($conn,$sql);
$res=array();

if(mysqli_num_rows($result)>0){

	while($rows=mysqli_fetch_array($result)){
		array_push($res, array('id'=>$rows['id'], '_HH_Code'=>$rows['_HH_Code'], 'FullNames'=>$rows['FullNames'], 'Dob'=>$rows['Dob'],'Respondent'=>$rows['Respondent'], 'Sex'=>$rows['Sex'], 'HighestEdu'=>$rows['HighestEdu'],'Destination'=>$rows['Destination'], 'Dept_Year'=>$rows['Dept_Year'], 'Status'=>$rows['Status'], 'Sent_Rem'=>$rows['Sent_Rem'], 'Curr_Res'=>$rows['Curr_Res'], 'Amount_Rem'=>$rows['Amount_Rem'], 'How_Rem'=>$rows['How_Rem']));
	}
	echo(json_encode(array("_demigrants"=>$res)));
}
else{
	echo(1);
}

mysqli_close($conn);
?>












