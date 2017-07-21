<?php
//connection information
$user = "root";
$pass = "abcd1234";
$dbh = new PDO('mysql:host=localhost;dbname=pssp_listing', $user, $pass);

//prepare statement to query table
$sth = $dbh->prepare("SELECT * FROM listings");
$sth->execute();


echo "<table>";

//loop over all table rows and fetch them as an object
while($result = $sth->fetch(PDO::FETCH_OBJ))
{
print "<tr>";
foreach($result as $value){
	
	print "<td> ".$value." </td>";
	
}
    echo "</tr>";
}
echo "<table>";
?>