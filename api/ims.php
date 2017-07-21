<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$con = mysqli_connect("localhost","root","","pssp_2016");	

	//echo $ucname;
	if (!$con)
	  {
	die('Could not connect: ' . mysqli_error());
	//echo "Syncing...";
	
  }else {syncForms();
	  //echo "Server Request ".$_SERVER["REQUEST_METHOD"];
  }
	}
	

function syncForms(){
global $con;
	
	$value = file_get_contents("php://input");
	$value = preg_replace('/[\x00-\x1F\x7F]/', '', $value);

	//$value = stripslashes($value);
	$value = iconv('UTF-8', 'UTF-8//IGNORE', utf8_encode($value));
	$value = str_replace("\0", "", $value);
	$value = str_replace("'", " ", $value);

	$today = date("Y-m-d H:i:s");
	$file = 'ims.json';

	file_put_contents($file, $today." - ".$value."\r\n", FILE_APPEND | LOCK_EX);
	$value = json_decode($value,true);
	
	
	
 	switch (json_last_error()) {
        case JSON_ERROR_NONE:
			$data[] = array(
				'status' => 'json_last_error()'
			);
			break;
        case JSON_ERROR_DEPTH:
            $data[] = array(
				'status' => 'json_last_error()'
			);
			break;
        case JSON_ERROR_STATE_MISMATCH:
            $data[] = array(
				'status' => 'json_last_error()'
			);
			break;
        case JSON_ERROR_CTRL_CHAR:
            $data[] = array(
				'status' => 'json_last_error()'
			);
			break;
        case JSON_ERROR_SYNTAX:
            $data[] = array(
				'status' => 'json_last_error()'
			);
			break;
        case JSON_ERROR_UTF8:
            $data[] = array(
				'status' => 'json_last_error()'
			);
			break;
        default:
            $data[] = array(
				'status' => 'json_last_error()'
			);
			break;
    }
	
 
if(json_last_error() === JSON_ERROR_NONE){
	$jCount = count($value);
	$rCount = 0;
foreach($value as $row)
{
$CHID=$row['CHID'];
$UID=$row['UID'];
$im=json_decode($row['IM'], true);
$imdt = $im['imdt'];
$impsu_hh = $im['impsu_hh'];
$ari=$im['ari'];
$bcg=$im['bcg'];
$bcgscar=$im['bcgscar'];
$bcgsrc=$im['bcgsrc'];
$dr=$im['dr'];
$ima=$im['ima'];
$imaf=$im['imaf'];
$imb=$im['imb'];
$imc=$im['imc'];
$imd=$im['imd'];
$imed=$im['imed'];
$imem=$im['imem'];
$imey=$im['imey'];
$imf=$im['imf'];
$img=$im['img'];
$imh=$im['imh'];
$imi=$im['imi'];
$imj=$im['imj'];
$imk=$im['imk'];
$iml=$im['iml'];
$imm=$im['imm'];
$m1=$im['m1'];
$m1src=$im['m1src'];
$m2=$im['m2'];
$m2src=$im['m2src'];
$opv0=$im['opv0'];
$opv0src=$im['opv0src'];
$opv1=$im['opv1'];
$opv1src=$im['opv1src'];
$opv2=$im['opv2'];
$opv2src=$im['opv2src'];
$opv3=$im['opv3'];
$opv3src=$im['opv3src'];
$p1=$im['p1'];
$p1src=$im['p1src'];
$p2=$im['p2'];
$p2src=$im['p2src'];
$p3=$im['p3'];
$p3src=$im['p3src'];
$pcv1=$im['pcv1'];
$pcv1src=$im['pcv1src'];
$pcv2=$im['pcv2'];
$pcv2src=$im['pcv2src'];
$pcv3=$im['pcv3'];
$pcv3src=$im['pcv3src'];




$sql = "INSERT INTO ims
(ari,
bcg,
bcgscar,
bcgsrc,
CHID,
dr,
imdt,
impsu_hh,
ima,
imaf,
imb,
imc,
imd,
imed,
imem,
imey,
imf,
img,
imh,
imi,
imj,
imk,
iml,
imm,
m1,
m1src,
m2,
m2src,
opv0,
opv0src,
opv1,
opv1src,
opv2,
opv2src,
opv3,
opv3src,
p1,
p1src,
p2,
p2src,
p3,
p3src,
pcv1,
pcv1src,
pcv2,
pcv2src,
pcv3,
pcv3src,
UID

) 
VALUES
('$ari',
'$bcg',
'$bcgscar',
'$bcgsrc',
'$CHID',
'$dr',
'$imdt',
'$impsu_hh',
'$ima',
'$imaf',
'$imb',
'$imc',
'$imd',
'$imed',
'$imem',
'$imey',
'$imf',
'$img',
'$imh',
'$imi',
'$imj',
'$imk',
'$iml',
'$imm',
'$m1',
'$m1src',
'$m2',
'$m2src',
'$opv0',
'$opv0src',
'$opv1',
'$opv1src',
'$opv2',
'$opv2src',
'$opv3',
'$opv3src',
'$p1',
'$p1src',
'$p2',
'$p2src',
'$p3',
'$p3src',
'$pcv1',
'$pcv1src',
'$pcv2',
'$pcv2src',
'$pcv3',
'$pcv3src',
'$UID'


)";
//echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));
	
	$ids[] = mysqli_insert_id($con);
	
$rCount= $rCount+1;
}
	//echo "Succcess!";
	} 
mysqli_close($con);
//$encoded = $jCount. " Received - ".$rCount." inserted Succcessfully";
//} else{
	//$encoded = file_get_contents("php://input");
//}
//}
$data = $ids;

header('Content-Type: application/json');
echo json_encode($ids);
}