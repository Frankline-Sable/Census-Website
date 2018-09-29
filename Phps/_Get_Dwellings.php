<?php

require_once("dbConnect.php");

$workId=$_POST["workId"];

$sql="SELECT `id`, `_HH_Code`, `Dwelling Units`, `Habitable Rooms`, `Tenure status`, `Roof Material`, `Wall Material`, `Floor Material`, `Water Source`, `Cook Fuel`, `Light Fuel`, `HumanWasteDisp` FROM `tb_dwelling` Where _HH_Code=".$workId;

$result=mysqli_query($conn,$sql);
$res=array();

if(mysqli_num_rows($result)>0){

	while($rows=mysqli_fetch_array($result)){
		array_push($res, array('id'=>$rows['id'], '_HH_Code'=>$rows['_HH_Code'], 'DwellingUnits'=>$rows['Dwelling Units'], 'HabitableRooms'=>$rows['Habitable Rooms'],'Tenurestatust'=>$rows['Tenure status'], 'RoofMaterial'=>$rows['Roof Material'], 'FloorMaterial'=>$rows['Floor Material'],'WaterSource'=>$rows['Water Source'], 'CookFuel'=>$rows['Cook Fuel'], 'LightFuel'=>$rows['Light Fuel'], 'HumanWasteDisp'=>$rows['HumanWasteDisp']));
	}
	echo(json_encode(array("_ddw"=>$res)));
}
else{
	echo(1);
}

mysqli_close($conn);
?>












