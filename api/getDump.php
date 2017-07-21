<?php 
	$con = mysqli_connect("localhost","root","abcd1234","pssp_2016");	

	//echo $ucname;
	if (!$con)
	  {
	die('Could not connect: ' . mysqli_error());
	//echo "Syncing...";
	
  }

$handle = fopen("listings.json", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
	echo "JSON: ".substr($line, 61)."</br>";
	
	
	$value = $line;
	$value = preg_replace('/[\x00-\x1F\x7F]/', '', $value);

	//$value = stripslashes($value);
	$value = iconv('UTF-8', 'UTF-8//IGNORE', utf8_encode($value));
	$value = str_replace("\0", "", $value);
	$value = str_replace("'", " ", $value);

	//$today = date("Y-m-d H:i:s");
	//$file = 'forms.json';

	//file_put_contents($file, $today." - ".$value."\r\n", FILE_APPEND | LOCK_EX);
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
$_id=$row['_id'];
$uid=$row['uid'];
$gpsacc=$row['gpsacc'];
$gpslat=$row['gpslat'];
$gpslng=$row['gpslng'];
$gpstime=$row['gpstime'];
$mna1=$row['mna1'];
$mna3=$row['mna3'];
$mna4=$row['mna4'];
$mna5=$row['mna5'];
$mna6=$row['mna6'];
$mna6a=$row['mna6a'];
$mna7=$row['mna7'];
$projectname=$row['projectname'];
$surveytype=$row['surveytype'];
$deviceid=$row['deviceid'];

	$sa=json_decode($row['sa'], true);
	$sb=json_decode($row['sb'], true);
	$sc=json_decode($row['sc'], true);
	$sd=json_decode($row['sd'], true);
	$se=json_decode($row['se'], true);
	$sf=json_decode($row['sf'], true);
	$sg=json_decode($row['sg'], true);


// SA
$mna8=$sa['mna8'];
$mna9=$sa['mna9'];
$mna10=$sa['mna10'];
$mna10x96=$sa['mna10x96'];
$mna11=$sa['mna11'];
$mna12=$sa['mna12'];
$mna12x96=$sa['mna12x96'];
$mna13=$sa['mna13'];

// SB
$mnb1=$sb['mnb1'];
$mnb2=$sb['mnb2'];
$mnb3=$sb['mnb3'];
$mnb4=$sb['mnb4'];
$mnb5=$sb['mnb5'];
$mnb6d=$sb['mnb6d'];
$mnb6m=$sb['mnb6m'];
$mnb7=$sb['mnb7'];
$mnsA=$sb['mnb7'];


// SC
$mnc1=$sc['mnc1'];
$mnc13=$sc['mnc13'];
$mnc2=$sc['mnc2'];
$mnc3=$sc['mnc3'];
$mnc4=$sc['mnc4'];
$mnc5bcg=$sc['mnc5bcg'];
$mnc5ipv1=$sc['mnc5ipv1'];
$mnc5ipv2=$sc['mnc5ipv2'];
$mnc5ipv3=$sc['mnc5ipv3'];
$mnc5m1=$sc['mnc5m1'];
$mnc5m2=$sc['mnc5m2'];
$mnc5opv0=$sc['mnc5opv0'];
$mnc5opv1=$sc['mnc5opv1'];
$mnc5opv2=$sc['mnc5opv2'];
$mnc5opv3=$sc['mnc5opv3'];
$mnc5p1=$sc['mnc5p1'];
$mnc5p2=$sc['mnc5p2'];
$mnc5p3=$sc['mnc5p3'];
$mnc5pcv1=$sc['mnc5pcv1'];
$mnc5pcv2=$sc['mnc5pcv2'];
$mnc5pcv3=$sc['mnc5pcv3'];

// SD
$mnd1=$sd['mnd1'];
$mnd10a=$sd['mnd10a'];
$mnd10b=$sd['mnd10b'];
$mnd10c=$sd['mnd10c'];
$mnd10d=$sd['mnd10d'];
$mnd10e=$sd['mnd10e'];
$mnd10f=$sd['mnd10f'];
$mnd10g=$sd['mnd10g'];
$mnd10h=$sd['mnd10h'];
$mnd10i=$sd['mnd10i'];
$mnd10x=$sd['mnd10x'];
$mnd10x96=$sd['mnd10x96'];
$mnd2=$sd['mnd2'];
$mnd3=$sd['mnd3'];
$mnd4=$sd['mnd4'];
$mnd5=$sd['mnd5'];
$mnd6a=$sd['mnd6a'];
$mnd6b=$sd['mnd6b'];
$mnd6c=$sd['mnd6c'];
$mnd6d=$sd['mnd6d'];
$mnd6e=$sd['mnd6e'];
$mnd6f=$sd['mnd6f'];
$mnd6g=$sd['mnd6g'];
$mnd6h=$sd['mnd6h'];
$mnd6i=$sd['mnd6i'];
$mnd6x=$sd['mnd6x'];
$mnd6x96=$sd['mnd6x96'];
$mnd7=$sd['mnd7'];
$mnd8=$sd['mnd8'];
$mnd9=$sd['mnd9'];

// SE
$mne1=$se['mne1'];
$mne10=$se['mne10'];
$mne10x96=$se['mne10x96'];
$mne11=$se['mne11'];
$mne11x96=$se['mne11x96'];
$mne12=$se['mne12'];
$mne13=$se['mne13'];
$mne13x96=$se['mne13x96'];
$mne14=$se['mne14'];
$mne15=$se['mne15'];
$mne16a=$se['mne16a'];
$mne16b=$se['mne16b'];
$mne16c=$se['mne16c'];
$mne16d=$se['mne16d'];
$mne16e=$se['mne16e'];
$mne16f=$se['mne16f'];
$mne16g=$se['mne16g'];
$mne16x=$se['mne16x'];
$mne16x96=$se['mne16x96'];
$mne17=$se['mne17'];
$mne18=$se['mne18'];
$mne18x96=$se['mne18x96'];
$mne2a=$se['mne2a'];
$mne2b=$se['mne2b'];
$mne2c=$se['mne2c'];
$mne2d=$se['mne2d'];
$mne2e=$se['mne2e'];
$mne2f=$se['mne2f'];
$mne2g=$se['mne2g'];
$mne2h=$se['mne2h'];
$mne2i=$se['mne2i'];
$mne2j=$se['mne2j'];
$mne2x=$se['mne2x'];
$mne2x96=$se['mne2x96'];
$mne3=$se['mne3'];
$mne4a=$se['mne4a'];
$mne4b=$se['mne4b'];
$mne4c=$se['mne4c'];
$mne4d=$se['mne4d'];
$mne4e=$se['mne4e'];
$mne4f=$se['mne4f'];
$mne4g=$se['mne4g'];
$mne4h=$se['mne4h'];
$mne4i=$se['mne4i'];
$mne4x=$se['mne4x'];
$mne4x96=$se['mne4x96'];
$mne4x99=$se['mne4x99'];
$mne5a=$se['mne5a'];
$mne5b=$se['mne5b'];
$mne5c=$se['mne5c'];
$mne5d=$se['mne5d'];
$mne5e=$se['mne5e'];
$mne5x=$se['mne5x'];
$mne5x96=$se['mne5x96'];
$mne5x99=$se['mne5x99'];
$mne6a=$se['mne6a'];
$mne6b=$se['mne6b'];
$mne6c=$se['mne6c'];
$mne6d=$se['mne6d'];
$mne6x=$se['mne6x'];
$mne6x96=$se['mne6x96'];
$mne6x99=$se['mne6x99'];
$mne7=$se['mne7'];
$mne7x96=$se['mne7x96'];
$mne8a=$se['mne8a'];
$mne8b=$se['mne8b'];
$mne8c=$se['mne8c'];
$mne8d=$se['mne8d'];
$mne8e=$se['mne8e'];
$mne8f=$se['mne8f'];
$mne8x=$se['mne8x'];
$mne8x96=$se['mne8x96'];
$mne9=$se['mne9'];

// SF
$mnf1=$sf['mnf1'];
$mnf1x96=$sf['mnf1x96'];
$mnf2=$sf['mnf2'];
$mnf2x96=$sf['mnf2x96'];
$mnf3=$sf['mnf3'];
$mnf3x96=$sf['mnf3x96'];
$mnf4=$sf['mnf4'];
$mnf5=$sf['mnf5'];
$mnf5x96=$sf['mnf5x96'];
$mnf6=$sf['mnf6'];
$mnf7=$sf['mnf7'];
$mnf7x96=$sf['mnf7x96'];
$mnf8=$sf['mnf8'];
$mnf8x96=$sf['mnf8x96'];
$mnf9a=$sf['mnf9a'];
$mnf9b=$sf['mnf9b'];
$mnf9c=$sf['mnf9c'];
$mnf9d=$sf['mnf9d'];
$mnf9e=$sf['mnf9e'];
$mnf9f=$sf['mnf9f'];
$mnf9g=$sf['mnf9g'];
$mnf9gx96=$sf['mnf9gx96'];
$mnf9i=$sf['mnf9i'];
$mnf9j=$sf['mnf9j'];
$mnf9k=$sf['mnf9k'];
$mnf9l=$sf['mnf9l'];
$mnf9m=$sf['mnf9m'];
$mnf9n=$sf['mnf9n'];
$mnf9o=$sf['mnf9o'];
$mnf9p=$sf['mnf9p'];
$mnf9q=$sf['mnf9q'];
$mnf9r=$sf['mnf9r'];
$mnf9s=$sf['mnf9s'];
$mnf9t=$sf['mnf9t'];

// SG
$mng1=$sg['mng1'];
$mng2=$sg['mng2'];
$mngsticker=$sg['mngsticker'];






$sql = "INSERT INTO forms2
(_id,
uid,
gpsacc,
gpslat,
gpslng,
gpstime,
mna1,
mna10,
mna10x96,
mna11,
mna12,
mna12x96,
mna13,
mna3,
mna4,
mna5,
mna6,
mna6a,
mna7,
mna8,
mna9,
mnb1,
mnb2,
mnb3,
mnb4,
mnb5,
mnb6d,
mnb6m,
mnb7,
mnc1,
mnc13,
mnc2,
mnc3,
mnc4,
mnc5bcg,
mnc5ipv1,
mnc5ipv2,
mnc5ipv3,
mnc5m1,
mnc5m2,
mnc5opv0,
mnc5opv1,
mnc5opv2,
mnc5opv3,
mnc5p1,
mnc5p2,
mnc5p3,
mnc5pcv1,
mnc5pcv2,
mnc5pcv3,
mnd1,
mnd10a,
mnd10b,
mnd10c,
mnd10d,
mnd10e,
mnd10f,
mnd10g,
mnd10h,
mnd10i,
mnd10x,
mnd10x96,
mnd2,
mnd3,
mnd4,
mnd5,
mnd6a,
mnd6b,
mnd6c,
mnd6d,
mnd6e,
mnd6f,
mnd6g,
mnd6h,
mnd6i,
mnd6x,
mnd6x96,
mnd7,
mnd8,
mnd9,
mne1,
mne10,
mne10x96,
mne11,
mne11x96,
mne12,
mne13,
mne13x96,
mne14,
mne15,
mne16a,
mne16b,
mne16c,
mne16d,
mne16e,
mne16f,
mne16g,
mne16x,
mne16x96,
mne17,
mne18,
mne18x96,
mne2a,
mne2b,
mne2c,
mne2d,
mne2e,
mne2f,
mne2g,
mne2h,
mne2i,
mne2j,
mne2x,
mne2x96,
mne3,
mne4a,
mne4b,
mne4c,
mne4d,
mne4e,
mne4f,
mne4g,
mne4h,
mne4i,
mne4x,
mne4x96,
mne4x99,
mne5a,
mne5b,
mne5c,
mne5d,
mne5e,
mne5x,
mne5x96,
mne5x99,
mne6a,
mne6b,
mne6c,
mne6d,
mne6x,
mne6x96,
mne6x99,
mne7,
mne7x96,
mne8a,
mne8b,
mne8c,
mne8d,
mne8e,
mne8f,
mne8x,
mne8x96,
mne9,
mnf1,
mnf1x96,
mnf2,
mnf2x96,
mnf3,
mnf3x96,
mnf4,
mnf5,
mnf5x96,
mnf6,
mnf7,
mnf7x96,
mnf8,
mnf8x96,
mnf9a,
mnf9b,
mnf9c,
mnf9d,
mnf9e,
mnf9f,
mnf9g,
mnf9gx96,
mnf9i,
mnf9j,
mnf9k,
mnf9l,
mnf9m,
mnf9n,
mnf9o,
mnf9p,
mnf9q,
mnf9r,
mnf9s,
mnf9t,
mng1,
mng2,
mngsticker,
projectname,
surveytype,
deviceid
) 
VALUES
('$_id',
'$uid',
'$gpsacc',
'$gpslat',
'$gpslng',
'$gpstime',
'$mna1',
'$mna10',
'$mna10x96',
'$mna11',
'$mna12',
'$mna12x96',
'$mna13',
'$mna3',
'$mna4',
'$mna5',
'$mna6',
'$mna6a',
'$mna7',
'$mna8',
'$mna9',
'$mnb1',
'$mnb2',
'$mnb3',
'$mnb4',
'$mnb5',
'$mnb6d',
'$mnb6m',
'$mnb7',
'$mnc1',
'$mnc13',
'$mnc2',
'$mnc3',
'$mnc4',
'$mnc5bcg',
'$mnc5ipv1',
'$mnc5ipv2',
'$mnc5ipv3',
'$mnc5m1',
'$mnc5m2',
'$mnc5opv0',
'$mnc5opv1',
'$mnc5opv2',
'$mnc5opv3',
'$mnc5p1',
'$mnc5p2',
'$mnc5p3',
'$mnc5pcv1',
'$mnc5pcv2',
'$mnc5pcv3',
'$mnd1',
'$mnd10a',
'$mnd10b',
'$mnd10c',
'$mnd10d',
'$mnd10e',
'$mnd10f',
'$mnd10g',
'$mnd10h',
'$mnd10i',
'$mnd10x',
'$mnd10x96',
'$mnd2',
'$mnd3',
'$mnd4',
'$mnd5',
'$mnd6a',
'$mnd6b',
'$mnd6c',
'$mnd6d',
'$mnd6e',
'$mnd6f',
'$mnd6g',
'$mnd6h',
'$mnd6i',
'$mnd6x',
'$mnd6x96',
'$mnd7',
'$mnd8',
'$mnd9',
'$mne1',
'$mne10',
'$mne10x96',
'$mne11',
'$mne11x96',
'$mne12',
'$mne13',
'$mne13x96',
'$mne14',
'$mne15',
'$mne16a',
'$mne16b',
'$mne16c',
'$mne16d',
'$mne16e',
'$mne16f',
'$mne16g',
'$mne16x',
'$mne16x96',
'$mne17',
'$mne18',
'$mne18x96',
'$mne2a',
'$mne2b',
'$mne2c',
'$mne2d',
'$mne2e',
'$mne2f',
'$mne2g',
'$mne2h',
'$mne2i',
'$mne2j',
'$mne2x',
'$mne2x96',
'$mne3',
'$mne4a',
'$mne4b',
'$mne4c',
'$mne4d',
'$mne4e',
'$mne4f',
'$mne4g',
'$mne4h',
'$mne4i',
'$mne4x',
'$mne4x96',
'$mne4x99',
'$mne5a',
'$mne5b',
'$mne5c',
'$mne5d',
'$mne5e',
'$mne5x',
'$mne5x96',
'$mne5x99',
'$mne6a',
'$mne6b',
'$mne6c',
'$mne6d',
'$mne6x',
'$mne6x96',
'$mne6x99',
'$mne7',
'$mne7x96',
'$mne8a',
'$mne8b',
'$mne8c',
'$mne8d',
'$mne8e',
'$mne8f',
'$mne8x',
'$mne8x96',
'$mne9',
'$mnf1',
'$mnf1x96',
'$mnf2',
'$mnf2x96',
'$mnf3',
'$mnf3x96',
'$mnf4',
'$mnf5',
'$mnf5x96',
'$mnf6',
'$mnf7',
'$mnf7x96',
'$mnf8',
'$mnf8x96',
'$mnf9a',
'$mnf9b',
'$mnf9c',
'$mnf9d',
'$mnf9e',
'$mnf9f',
'$mnf9g',
'$mnf9gx96',
'$mnf9i',
'$mnf9j',
'$mnf9k',
'$mnf9l',
'$mnf9m',
'$mnf9n',
'$mnf9o',
'$mnf9p',
'$mnf9q',
'$mnf9r',
'$mnf9s',
'$mnf9t',
'$mng1',
'$mng2',
'$mngsticker',
'$projectname',
'$surveytype',
'$deviceid'

)";

	//echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));
//$rCount= $rCount+1;
}
	//echo "Succcess!";
	} 
mysqli_close($con);
//$encoded = $jCount. " Received - ".$rCount." inserted Succcessfully";
	
	
    }

    fclose($handle);
} else {
    // error opening the file.
} 


?>