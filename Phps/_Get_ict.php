<?php

require_once("dbConnect.php");

$workId=$_POST["workId"];

$sql="SELECT `id`, `_HH_Code`, `accessibility`, `Frequency`, `PlaceFAccess` FROM `tb_ict` WHERE `_HH_Code`=".$workId;

$result=mysqli_query($conn,$sql);
$res=array();

if(mysqli_num_rows($result)>0){

	while($rows=mysqli_fetch_array($result)){
		array_push($res, array('id'=>$rows['id'], '_HH_Code'=>$rows['_HH_Code'], 'Accessibility'=>$rows['accessibility'], 'Frequency'=>$rows['Frequency'],'PlaceFAccess'=>$rows['PlaceFAccess']));
	}
	echo(json_encode(array("_dict"=>$res)));
}
else{
	echo(1);
}

mysqli_close($conn);
?>












