<?php
require_once('dbConnect.php');

$sql="INSERT INTO `tb_dwelling`(`id`, `_HH_Code`, `Dwelling Units`, `Habitable Rooms`, `Tenure status`, `Roof Material`, `Wall Material`, `Floor Material`, `Water Source`, `Cook Fuel`, `Light Fuel`,`HumanWasteDisp`) VALUES (NULL, '".$_POST['_HH_Code']."', '".$_POST['DwellingUnits']."', '".$_POST['HabitableRooms']."', '".$_POST['Tenurestatus']."', '".$_POST['RoofMaterial']."', '".$_POST['WallMaterial']."', '".$_POST['FloorMaterial']."', '".$_POST['WaterSource']."', '".$_POST['CookFuel']."', '".$_POST['LightFuel']."', '".$_POST['HumanWasteDisp']."')";

 if($conn->query($sql)===TRUE){
	echo("Cool");
}
else{
	echo("failure".$conn->error);
}
$conn->close();

?>
