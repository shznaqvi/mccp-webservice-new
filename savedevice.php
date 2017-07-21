<?php
echo "I am Server";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$con = mysqli_connect("localhost","root","","mccp2");
	if (!$con)
	  {
	die('Could not connect: ' . mysqli_error());
	//echo "Syncing...";
	
  }else {syncFiles();
	  //echo "Server Request ".$_SERVER["REQUEST_METHOD"];
  }
	}

function syncFiles(){
	
	global $con;
	$value = json_decode(file_get_contents("php://input"),true);
	foreach($value as $row){
	$sfID=$row['ID'];
	$sfFormNo=$row['FormNo'];
	$sfData=$row['Data'];
	$DeviceID=$row['DeviceID'];
	$fromType = substr($sfFormNo, 0,2);

	switch ($fromType){
		
	Case "MC":
		$sql = "INSERT INTO sfMCFiles (sfID, sfFormNo, sfData, sfDeviceID) VALUES ('$sfID', '$sfFormNo', '$sfData', '$DeviceID');";
		mysqli_query($con, $sql) or die (mysqli_error($con));
		break;
	Case "IM":
		$sql = "INSERT INTO sfIMFiles (sfID, sfFormNo, sfData, sfDeviceID) VALUES ('$sfID', '$sfFormNo', '$sfData', '$DeviceID');";
		mysqli_query($con, $sql) or die (mysqli_error($con));
		break;
	Case "CF":
		$sql = "INSERT INTO sfCFFiles (sfID, sfFormNo, sfData, sfDeviceID) VALUES ('$sfID', '$sfFormNo', '$sfData', '$DeviceID');";
		mysqli_query($con, $sql) or die (mysqli_error($con));
		break;
	default:
		$sql = "INSERT INTO sfFiles (sfID, sfFormNo, sfData, sfDeviceID) VALUES ('$sfID', '$sfFormNo', '$sfData', '$DeviceID');";
		mysqli_query($con, $sql) or die (mysqli_error($con));
	}
	
	}
	mysqli_close($con);

	}