<?php

require_once("dbConnect.php");

$workId=$_POST["workId"];

$sql="SELECT `id`, `_HH_Code`, `Live_Births`, `Children_Alive`, `Children_HH`, `Children_ElseWhere`, `Dead_Child`, `Last_Born_Date`, `LB_Notified`, `LB_Sex`, `LB_Survival_Stats` FROM `tb_females` WHERE `_HH_Code`=".$workId;

$result=mysqli_query($conn,$sql);
$res=array();

if(mysqli_num_rows($result)>0){

	while($rows=mysqli_fetch_array($result)){
		array_push($res, array('id'=>$rows['id'], '_HH_Code'=>$rows['_HH_Code'], 'Live_Births'=>$rows['Live_Births'], 'Children_Alive'=>$rows['Children_Alive'],'Children_HH'=>$rows['Children_HH'],'Children_ElseWhere'=>$rows['Children_ElseWhere'], 'Dead_Child'=>$rows['Dead_Child'],'Last_Born_Date'=>$rows['Last_Born_Date'], 'LB_Notified'=>$rows['LB_Notified'], 'LB_Sex'=>$rows['LB_Sex'],'LB_Survival_Stats'=>$rows['LB_Survival_Stats']));
	}
	echo(json_encode(array("_dfem"=>$res)));
}
else{
	echo(1);
}

mysqli_close($conn);
?>

