<?php

require_once("dbConnect.php");

$workId=$_POST["workId"];

$sql="SELECT `id`, `_HH_Code`, `FullNames`, `DOB`, `RelationShip`, `Sex`, `Tribe`, `Religion`, `Marital_St`, `BithPlace`, `Prev_Res`, `Curr_Res`, `Dur_Res`, `OrphanHood`, `Disabilty`, `TypeDisability`, `MoreDisability`, `School`, `Highest_Level`, `LevelComp`, `ActivityLastWeek`, `Employer`, `HoursWork` FROM `tb_citizen` WHERE `_HH_Code`=".$workId;

$result=mysqli_query($conn,$sql);
$res=array();


if(mysqli_num_rows($result)>0){

	while($rows=mysqli_fetch_array($result)){
		array_push($res, array('id'=>$rows['id'], '_HH_Code'=>$rows['_HH_Code'], 'FullNames'=>$rows['FullNames'], 'DOB'=>$rows['DOB'],'RelationShip'=>$rows['RelationShip'], 'Sex'=>$rows['Sex'], 'Tribe'=>$rows['Tribe'],'Religion'=>$rows['Religion'], 'Marital_St'=>$rows['Marital_St'], 'BithPlace'=>$rows['BithPlace'], 'Prev_Res'=>$rows['Prev_Res'], 'Curr_Res'=>$rows['Curr_Res'], 'Dur_Res'=>$rows['Dur_Res'], 'OrphanHood'=>$rows['OrphanHood'], 'Disabilty'=>$rows['Disabilty'], 'TypeDisability'=>$rows['TypeDisability'], 'MoreDisability'=>$rows['MoreDisability'], 'School'=>$rows['School'], 'Highest_Level'=>$rows['Highest_Level'], 'LevelComp'=>$rows['LevelComp'],'ActivityLastWeek'=>$rows['ActivityLastWeek'],'Employer'=>$rows['Employer'], 'HoursWork'=>$rows['HoursWork']));
	}
	echo(json_encode(array("_dcitizens"=>$res)));
}
else{
	echo(1);
}

mysqli_close($conn);
?>












