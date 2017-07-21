<?php

$con = mysqli_connect("localhost","root","","pssp_2016");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT 
    UID,
    hh02,
    hh03,
    hh07,
    child_name
FROM children;
";

$result=mysqli_query($con,$sql);
$json = array();


while($row = mysqli_fetch_array ($result))     
{
    $children = array(
        'UID' => $row['UID'],		
		'hh02' => $row['hh02'],
		'hh03' => $row['hh03'],
        'hh07' => $row['hh07'],
		'child_name' => $row['child_name']
	);
	//echo $row['ClusterID'];
    array_push($json, $children);
	//var_dump($logins);
}

$jsonstring = json_encode($json);
echo $jsonstring;
die();