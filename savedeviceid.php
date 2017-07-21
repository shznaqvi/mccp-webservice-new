<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$con = mysqli_connect("localhost","root","","mccp2");
	if (!$con)
	  {
	die('Could not connect: ' . mysqli_error());
	//echo "Syncing...";
	
  }else {saveDevice();
	  //echo "Server Request ".$_SERVER["REQUEST_METHOD"];
  }
	}

function saveDevice(){
	
	global $con;
	$value = json_decode(file_get_contents("php://input"),true);
	foreach($value as $row){
	$DeviceNo=$row['DeviceNo'];
	$DeviceID=$row['DeviceId'];

		
	
		$sql = "INSERT INTO devices (deviceno, deviceid) VALUES ('$DeviceNo', '$DeviceID');";
		mysqli_query($con, $sql) or die (mysqli_error($con));
	
	
	}
	mysqli_close($con);

	}