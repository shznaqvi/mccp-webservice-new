<?php
$con = mysqli_connect("localhost","root","","pssp_2016");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="SELECT username, password FROM users;";
$result=mysqli_query($con,$sql);


$json = array();
while($row = mysqli_fetch_array ($result))     
{
    $logins = array(
        'username' => $row['username'],
        'password' => $row['password']
    
    );
    array_push($json, $logins);
}

$jsonstring = json_encode($json);
echo $jsonstring;

die();

	
?>