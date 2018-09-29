<?php

require_once("dbConnect.php");

$workId=$_POST["workId"];

$sql="SELECT `id`, `_HH_Code`, `Livestock` FROM `tb_livestock`  WHERE `_HH_Code`=".$workId;


$result=mysqli_query($conn,$sql);
$res=array();

if(mysqli_num_rows($result)>0){

	while($rows=mysqli_fetch_array($result)){
		array_push($res, array('id'=>$rows['id'], '_HH_Code'=>$rows['_HH_Code'], 'Livestock'=>$rows['Livestock']));
	}
	echo(json_encode(array("_dlvs"=>$res)));
}
else{
	echo(1);
}

mysqli_close($conn);
?>












