<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$con = mysqli_connect("localhost","root","","mccp2-census");	

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
	$file = 'mc.json';

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
	$mcFrmno=$row['mcFrmno'];
	$UID=$row['ID'];
	$mc101=$row['mc101'];
	$mc101time=$row['mc101time'];
	//$mcCity=$row['mcCity'];
	$mc102=$row['mc102'];
	$mc103=$row['mc103'];
	$mc104=$row['mc104'];
	$mc105=$row['mc105'];
	$mc106=$row['mc106'];
	$mcAdd=$row['mcAdd'];
	$mc107=$row['mc107'];
	$mc108=$row['mc108'];
	$mcRem1=$row['mcRem1'];
	$mc109=$row['mc109'];
	$mcGPSLat =$row['mcGPSLat'];
	$mcGPSLng =$row['mcGPSLng'];
	$mcGPSAcc =$row['mcGPSAcc'];
	$mcGPSTime =$row['mcGPSTime'];
	$DeviceID =$row['DeviceID'];
	$sec2=json_decode($row['s2'], true);
	$sec4=json_decode($row['s4'], true);
	$sec5=json_decode($row['s5'], true);
	$sec6=json_decode($row['s6'], true);
	$ending=json_decode($row['ending'], true);


// Ending
$mc110=$ending['mc110'];
$mc110x=$ending['mc110x'];

// Section 2
$mc201age=$sec2['mc201age'];
$mc201edu=$sec2['mc201edu'];
$mc201gndr=$sec2['mc201gndr'];
$mc201nm=$sec2['mc201nm'];
$mc201ocu=$sec2['mc201ocu'];
$mc201type=$sec2['mc201type'];
$mc202age=$sec2['mc202age'];
$mc202edu=$sec2['mc202edu'];
$mc202gndr=$sec2['mc202gndr'];
$mc202nm=$sec2['mc202nm'];
$mc202ocu=$sec2['mc202ocu'];
$mc203f=$sec2['mc203f'];
$mc203m=$sec2['mc203m'];
$mc203tot=$sec2['mc203tot'];
$mc204f=$sec2['mc204f'];
$mc204m=$sec2['mc204m'];
$mc204t=$sec2['mc204t'];
$mc205mm=$sec2['mc205mm'];
$mc205yy=$sec2['mc205yy'];
$mc205a=$sec2['mc205a'];
$mc206=$sec2['mc206'];
$mc2071m=$sec2['mc2071m'];
$mc2071w=$sec2['mc2071w'];
$mc2072m=$sec2['mc2072m'];
$mc2072w=$sec2['mc2072w'];
$mc2073m=$sec2['mc2073m'];
$mc2073w=$sec2['mc2073w'];
$mcRem2=$sec2['mcRem2'];

//SECTION 4
$mc401=$sec4['mc401'];
$mc402_1=$sec4['mc402_1'];
$mc402_10=$sec4['mc402_10'];
$mc402_2=$sec4['mc402_2'];
$mc402_3=$sec4['mc402_3'];
$mc402_4=$sec4['mc402_4'];
$mc402_5=$sec4['mc402_5'];
$mc402_6=$sec4['mc402_6'];
$mc402_7=$sec4['mc402_7'];
$mc402_8=$sec4['mc402_8'];
$mc402_88=$sec4['mc402_88'];
$mc402_9=$sec4['mc402_9'];
$mc402x=$sec4['mc402x'];
$mc403=$sec4['mc403'];
$mc404_1=$sec4['mc404_1'];
$mc404_2=$sec4['mc404_2'];
$mc404_3=$sec4['mc404_3'];
$mc404_4=$sec4['mc404_4'];
$mc404_5=$sec4['mc404_5'];
$mc404_6=$sec4['mc404_6'];
$mc404_7=$sec4['mc404_7'];
$mc404_8=$sec4['mc404_8'];
$mc404_88=$sec4['mc404_88'];
$mc404_9=$sec4['mc404_9'];
$mc404_99=$sec4['mc404_99'];
$mc404x=$sec4['mc404x'];
$mc404x_1=$sec4['mc404x_1'];
$mc404x_2=$sec4['mc404x_2'];
$mc404x_3=$sec4['mc404x_3'];
$mc405_1=$sec4['mc405_1'];
$mc405_2=$sec4['mc405_2'];
$mc405_3=$sec4['mc405_3'];
$mc405_4=$sec4['mc405_4'];
$mc405_5=$sec4['mc405_5'];
$mc405_88=$sec4['mc405_88'];
$mc405_99=$sec4['mc405_99'];
$mc405a1=$sec4['mc405a1'];
$mc405a2=$sec4['mc405a2'];
$mc405a3=$sec4['mc405a3'];
$mc405a4=$sec4['mc405a4'];
$mc405a88=$sec4['mc405a88'];
$mc405a99=$sec4['mc405a99'];
$mc405ax=$sec4['mc405ax'];
$mc405x=$sec4['mc405x'];
$mc406=$sec4['mc406'];
$mc407_1=$sec4['mc407_1'];
$mc407_2=$sec4['mc407_2'];
$mc407_3=$sec4['mc407_3'];
$mc407_4=$sec4['mc407_4'];
$mc407_5=$sec4['mc407_5'];
$mc407_6=$sec4['mc407_6'];
$mc407_88=$sec4['mc407_88'];
$mc407x=$sec4['mc407x'];
$mc408=$sec4['mc408'];
$mc409=$sec4['mc409'];
$mc409x=$sec4['mc409x'];
$mc410=$sec4['mc410'];
$mc410A=$sec4['mc410A'];
$mc410B_1=$sec4['mc410B_1'];
$mc410B_2=$sec4['mc410B_2'];
$mc410B_3=$sec4['mc410B_3'];
$mc410B_4=$sec4['mc410B_4'];
$mc410B_5=$sec4['mc410B_5'];
$mc410B_88=$sec4['mc410B_88'];
$mc410B_99=$sec4['mc410B_99'];
$mc410B_x=$sec4['mc410B_x'];
$mc410x=$sec4['mc410x'];
$mc411=$sec4['mc411'];
$mc412=$sec4['mc412'];
$mc413_1=$sec4['mc413_1'];
$mc413_2=$sec4['mc413_2'];
$mc413_3=$sec4['mc413_3'];
$mc413_4=$sec4['mc413_4'];
$mc413_5=$sec4['mc413_5'];
$mc413_6=$sec4['mc413_6'];
$mc413_7=$sec4['mc413_7'];
$mc413_88=$sec4['mc413_88'];
$mc413x=$sec4['mc413x'];
$mc414=$sec4['mc414'];
$mc415=$sec4['mc415'];
$mc415x=$sec4['mc415x'];
$mcRem4=$sec4['mcRem4'];

// SECTION 5
$mc501=$sec5['mc501'];
$mc501_88=$sec5['mc501_88'];
$mc502=$sec5['mc502'];
$mc503Afcv=$sec5['mc503Afcv'];
$mc503Alhs=$sec5['mc503Alhs'];
$mc503Alhw=$sec5['mc503Alhw'];
$mc503Ango=$sec5['mc503Ango'];
$mc503Ax=$sec5['mc503Ax'];
$mc503Bfcv=$sec5['mc503Bfcv'];
$mc503Blhs=$sec5['mc503Blhs'];
$mc503Blhw=$sec5['mc503Blhw'];
$mc503Bngo=$sec5['mc503Bngo'];
$mc503Bx=$sec5['mc503Bx'];
$mc503Cfcv=$sec5['mc503Cfcv'];
$mc503Clhs=$sec5['mc503Clhs'];
$mc503Clhw=$sec5['mc503Clhw'];
$mc503Cngo=$sec5['mc503Cngo'];
$mc503Cx=$sec5['mc503Cx'];
$mc503Dfcv=$sec5['mc503Dfcv'];
$mc503Dlhs=$sec5['mc503Dlhs'];
$mc503Dlhw=$sec5['mc503Dlhw'];
$mc503Dngo=$sec5['mc503Dngo'];
$mc503Dx=$sec5['mc503Dx'];
$mc503Efcv=$sec5['mc503Efcv'];
$mc503Elhs=$sec5['mc503Elhs'];
$mc503Elhw=$sec5['mc503Elhw'];
$mc503Engo=$sec5['mc503Engo'];
$mc503Ex=$sec5['mc503Ex'];
$mc503Ffcv=$sec5['mc503Ffcv'];
$mc503Flhs=$sec5['mc503Flhs'];
$mc503Flhw=$sec5['mc503Flhw'];
$mc503Fngo=$sec5['mc503Fngo'];
$mc503Fx=$sec5['mc503Fx'];
$mc503Gfcv=$sec5['mc503Gfcv'];
$mc503Glhs=$sec5['mc503Glhs'];
$mc503Glhw=$sec5['mc503Glhw'];
$mc503Gngo=$sec5['mc503Gngo'];
$mc503Gx=$sec5['mc503Gx'];
$mc503GXx=$sec5['mc503GXx'];
$mc503Xfcv=$sec5['mc503Xfcv'];
$mc503Xlhs=$sec5['mc503Xlhs'];
$mc503Xlhw=$sec5['mc503Xlhw'];
$mc503Xngo=$sec5['mc503Xngo'];
$mc503Xx=$sec5['mc503Xx'];
$mc504F=$sec5['mc504F'];
$mc504Fx=$sec5['mc504Fx'];
$mc504R=$sec5['mc504R'];
$mc504Rx=$sec5['mc504Rx'];
$mc504W=$sec5['mc504W'];
$mc504Wx=$sec5['mc504Wx'];
$mc505=$sec5['mc505'];
$mc506=$sec5['mc506'];
$mc507=$sec5['mc507'];
$mc508=$sec5['mc508'];
$mc508_88=$sec5['mc508_88'];
$mc509=$sec5['mc509'];
$mc509_88=$sec5['mc509_88'];
$mc510=$sec5['mc510'];
$mc510_88=$sec5['mc510_88'];
$mc511=$sec5['mc511'];
$mc512_1=$sec5['mc512_1'];
$mc512_2=$sec5['mc512_2'];
$mc512_3=$sec5['mc512_3'];
$mc512_4=$sec5['mc512_4'];
$mc512_5=$sec5['mc512_5'];
$mc512_6=$sec5['mc512_6'];
$mc512_7=$sec5['mc512_7'];
$mc512_88=$sec5['mc512_88'];
$mc512_99=$sec5['mc512_99'];
$mc512x=$sec5['mc512x'];
$mc513=$sec5['mc513'];
$mc513x=$sec5['mc513x'];
$mc514=$sec5['mc514'];
$mc515=$sec5['mc515'];
$mc516=$sec5['mc516'];
$mc517=$sec5['mc517'];
$mc518=$sec5['mc518'];
$mc519=$sec5['mc519'];
$mc520=$sec5['mc520'];
$mc521=$sec5['mc521'];
$mc522_1=$sec5['mc522_1'];
$mc522_2=$sec5['mc522_2'];
$mc522_3=$sec5['mc522_3'];
$mc522_4=$sec5['mc522_4'];
$mc522_5=$sec5['mc522_5'];
$mc522_6=$sec5['mc522_6'];
$mc522_7=$sec5['mc522_7'];
$mc522_8=$sec5['mc522_8'];
$mc522_88=$sec5['mc522_88'];
$mc522_9=$sec5['mc522_9'];
$mc523=$sec5['mc523'];
$mc524_99=$sec5['mc524_99'];
$mc524acr=$sec5['mc524acr'];
$mc524can=$sec5['mc524can'];
$mc525_1=$sec5['mc525_1'];
$mc525_10=$sec5['mc525_10'];
$mc525_11=$sec5['mc525_11'];
$mc525_12=$sec5['mc525_12'];
$mc525_13=$sec5['mc525_13'];
$mc525_14=$sec5['mc525_14'];
$mc525_15=$sec5['mc525_15'];
$mc525_16=$sec5['mc525_16'];
$mc525_17=$sec5['mc525_17'];
$mc525_18=$sec5['mc525_18'];
$mc525_19=$sec5['mc525_19'];
$mc525_2=$sec5['mc525_2'];
$mc525_20=$sec5['mc525_20'];
$mc525_3=$sec5['mc525_3'];
$mc525_4=$sec5['mc525_4'];
$mc525_5=$sec5['mc525_5'];
$mc525_6=$sec5['mc525_6'];
$mc525_7=$sec5['mc525_7'];
$mc525_7x=$sec5['mc525_7x'];
$mc525_8=$sec5['mc525_8'];
$mc525_9=$sec5['mc525_9'];
$mcRem5=$sec5['mcRem5'];

$mcEndDateTime=$ending['mcEndDateTime'];
$mcFrmno=$row['mcFrmno'];
$mcGPSAcc=$row['mcGPSAcc'];
$mcGPSLat=$row['mcGPSLat'];
$mcGPSLng=$row['mcGPSLng'];
$mcGPSTime=$row['mcGPSTime'];

$PN=$row['PN'];
$ST=$row['ST'];


$mc601=$sec6['mc601'];
$mc602=$sec6['mc602'];
$mc603_1=$sec6['mc603_1'];
$mc603_2=$sec6['mc603_2'];
$mc603_3=$sec6['mc603_3'];
$mc603_4=$sec6['mc603_4'];
$mc603_5=$sec6['mc603_5'];
$mc603x1=$sec6['mc603x1'];
$mc604_1=$sec6['mc604_1'];
$mc604_10=$sec6['mc604_10'];
$mc604_11=$sec6['mc604_11'];
$mc604_12=$sec6['mc604_12'];
$mc604_2=$sec6['mc604_2'];
$mc604_3=$sec6['mc604_3'];
$mc604_4=$sec6['mc604_4'];
$mc604_5=$sec6['mc604_5'];
$mc604_6=$sec6['mc604_6'];
$mc604_7=$sec6['mc604_7'];
$mc604_8=$sec6['mc604_8'];
$mc604_88=$sec6['mc604_88'];
$mc604_9=$sec6['mc604_9'];
$mc604x=$sec6['mc604x'];
$mc605_1=$sec6['mc605_1'];
$mc605_2=$sec6['mc605_2'];
$mc605_3=$sec6['mc605_3'];
$mc605_4=$sec6['mc605_4'];
$mc605_5=$sec6['mc605_5'];
$mc605x=$sec6['mc605x'];
$mc606=$sec6['mc606'];
$mc607_1=$sec6['mc607_1'];
$mc607_2=$sec6['mc607_2'];
$mc607_3=$sec6['mc607_3'];
$mc607_4=$sec6['mc607_4'];
$mc607_5=$sec6['mc607_5'];
$mc607_6=$sec6['mc607_6'];
$mc607_7=$sec6['mc607_7'];
$mc607_88=$sec6['mc607_88'];
$mc607a=$sec6['mc607a'];
$mc607b=$sec6['mc607b'];
$mc607bx=$sec6['mc607bx'];
$mc607x=$sec6['mc607x'];
$mc608_m1=$sec6['mc608_m1'];
$mc608_m2=$sec6['mc608_m2'];
$mc608_m3=$sec6['mc608_m3'];
$mc608_m4=$sec6['mc608_m4'];
$mc608_m5=$sec6['mc608_m5'];
$mc609=$sec6['mc609'];
$mc610=$sec6['mc610'];
$mcRem6=$sec6['mcRem6'];





 	
	// SECTION Ending
	$mc109 = $ending['mc109'];
	$mc110 = $ending['mc110'];
	$mc110x = $ending['mc110x'];

$sql = "INSERT INTO forms2
(DeviceID,
mc101,
mc101time,
mc102,
mc103,
mc104,
mc105,
mc106,
mcAdd,
mc107,
mc108,
mcRem1,
mc109,
mc110,
mc110x,
mc201age,
mc201edu,
mc201gndr,
mc201nm,
mc201ocu,
mc201type,
mc202age,
mc202edu,
mc202gndr,
mc202nm,
mc202ocu,
mc203f,
mc203m,
mc203tot,
mc204f,
mc204m,
mc204t,
mc205mm,
mc205yy,
mc205a,
mc206,
mc2071m,
mc2071w,
mc2072m,
mc2072w,
mc2073m,
mc2073w,
mc401,
mc402_1,
mc402_10,
mc402_2,
mc402_3,
mc402_4,
mc402_5,
mc402_6,
mc402_7,
mc402_8,
mc402_88,
mc402_9,
mc402x,
mc403,
mc404_1,
mc404_2,
mc404_3,
mc404_4,
mc404_5,
mc404_6,
mc404_7,
mc404_8,
mc404_88,
mc404_9,
mc404_99,
mc404x,
mc404x_1,
mc404x_2,
mc404x_3,
mc405_1,
mc405_2,
mc405_3,
mc405_4,
mc405_5,
mc405_88,
mc405_99,
mc405a1,
mc405a2,
mc405a3,
mc405a4,
mc405a88,
mc405a99,
mc405ax,
mc405x,
mc406,
mc407_1,
mc407_2,
mc407_3,
mc407_4,
mc407_5,
mc407_6,
mc407_88,
mc407x,
mc408,
mc409,
mc409x,
mc410,
mc410A,
mc410B_1,
mc410B_2,
mc410B_3,
mc410B_4,
mc410B_5,
mc410B_88,
mc410B_99,
mc410B_x,
mc410x,
mc411,
mc412,
mc413_1,
mc413_2,
mc413_3,
mc413_4,
mc413_5,
mc413_6,
mc413_7,
mc413_88,
mc413x,
mc414,
mc415,
mc415x,
mc501,
mc501_88,
mc502,
mc503Afcv,
mc503Alhs,
mc503Alhw,
mc503Ango,
mc503Ax,
mc503Bfcv,
mc503Blhs,
mc503Blhw,
mc503Bngo,
mc503Bx,
mc503Cfcv,
mc503Clhs,
mc503Clhw,
mc503Cngo,
mc503Cx,
mc503Dfcv,
mc503Dlhs,
mc503Dlhw,
mc503Dngo,
mc503Dx,
mc503Efcv,
mc503Elhs,
mc503Elhw,
mc503Engo,
mc503Ex,
mc503Ffcv,
mc503Flhs,
mc503Flhw,
mc503Fngo,
mc503Fx,
mc503Gfcv,
mc503Glhs,
mc503Glhw,
mc503Gngo,
mc503Gx,
mc503GXx,
mc503Xfcv,
mc503Xlhs,
mc503Xlhw,
mc503Xngo,
mc503Xx,
mc504F,
mc504Fx,
mc504R,
mc504Rx,
mc504W,
mc504Wx,
mc505,
mc506,
mc507,
mc508,
mc508_88,
mc509,
mc509_88,
mc510,
mc510_88,
mc511,
mc512_1,
mc512_2,
mc512_3,
mc512_4,
mc512_5,
mc512_6,
mc512_7,
mc512_88,
mc512_99,
mc512x,
mc513,
mc513x,
mc514,
mc515,
mc516,
mc517,
mc518,
mc519,
mc520,
mc521,
mc522_1,
mc522_2,
mc522_3,
mc522_4,
mc522_5,
mc522_6,
mc522_7,
mc522_8,
mc522_88,
mc522_9,
mc523,
mc524_99,
mc524acr,
mc524can,
mc525_1,
mc525_10,
mc525_11,
mc525_12,
mc525_13,
mc525_14,
mc525_15,
mc525_16,
mc525_17,
mc525_18,
mc525_19,
mc525_2,
mc525_20,
mc525_3,
mc525_4,
mc525_5,
mc525_6,
mc525_7,
mc525_7x,
mc525_8,
mc525_9,
mc601,
mc602,
mc603_1,
mc603_2,
mc603_3,
mc603_4,
mc603_5,
mc603x1,
mc604_1,
mc604_10,
mc604_11,
mc604_12,
mc604_2,
mc604_3,
mc604_4,
mc604_5,
mc604_6,
mc604_7,
mc604_8,
mc604_88,
mc604_9,
mc604x,
mc605_1,
mc605_2,
mc605_3,
mc605_4,
mc605_5,
mc605x,
mc606,
mc607_1,
mc607_2,
mc607_3,
mc607_4,
mc607_5,
mc607_6,
mc607_7,
mc607_88,
mc607a,
mc607b,
mc607bx,
mc607x,
mc608_m1,
mc608_m2,
mc608_m3,
mc608_m4,
mc608_m5,
mc609,
mc610,
mcRem6,
mcEndDateTime,
mcFrmno,
UID,
mcGPSAcc,
mcGPSLat,
mcGPSLng,
mcGPSTime,
mcRem2,
mcRem4,
mcRem5,
PN,
ST
) 
VALUES
('$DeviceID',
'$mc101',
'$mc101time',
'$mc102',
'$mc103',
'$mc104',
'$mc105',
'$mc106',
'$mcAdd',
'$mc107',
'$mc108',
'$mcRem1',
'$mc109',
'$mc110',
'$mc110x',
'$mc201age',
'$mc201edu',
'$mc201gndr',
'$mc201nm',
'$mc201ocu',
'$mc201type',
'$mc202age',
'$mc202edu',
'$mc202gndr',
'$mc202nm',
'$mc202ocu',
'$mc203f',
'$mc203m',
'$mc203tot',
'$mc204f',
'$mc204m',
'$mc204t',
'$mc205mm',
'$mc205yy',
'$mc205a',
'$mc206',
'$mc2071m',
'$mc2071w',
'$mc2072m',
'$mc2072w',
'$mc2073m',
'$mc2073w',
'$mc401',
'$mc402_1',
'$mc402_10',
'$mc402_2',
'$mc402_3',
'$mc402_4',
'$mc402_5',
'$mc402_6',
'$mc402_7',
'$mc402_8',
'$mc402_88',
'$mc402_9',
'$mc402x',
'$mc403',
'$mc404_1',
'$mc404_2',
'$mc404_3',
'$mc404_4',
'$mc404_5',
'$mc404_6',
'$mc404_7',
'$mc404_8',
'$mc404_88',
'$mc404_9',
'$mc404_99',
'$mc404x',
'$mc404x_1',
'$mc404x_2',
'$mc404x_3',
'$mc405_1',
'$mc405_2',
'$mc405_3',
'$mc405_4',
'$mc405_5',
'$mc405_88',
'$mc405_99',
'$mc405a1',
'$mc405a2',
'$mc405a3',
'$mc405a4',
'$mc405a88',
'$mc405a99',
'$mc405ax',
'$mc405x',
'$mc406',
'$mc407_1',
'$mc407_2',
'$mc407_3',
'$mc407_4',
'$mc407_5',
'$mc407_6',
'$mc407_88',
'$mc407x',
'$mc408',
'$mc409',
'$mc409x',
'$mc410',
'$mc410A',
'$mc410B_1',
'$mc410B_2',
'$mc410B_3',
'$mc410B_4',
'$mc410B_5',
'$mc410B_88',
'$mc410B_99',
'$mc410B_x',
'$mc410x',
'$mc411',
'$mc412',
'$mc413_1',
'$mc413_2',
'$mc413_3',
'$mc413_4',
'$mc413_5',
'$mc413_6',
'$mc413_7',
'$mc413_88',
'$mc413x',
'$mc414',
'$mc415',
'$mc415x',
'$mc501',
'$mc501_88',
'$mc502',
'$mc503Afcv',
'$mc503Alhs',
'$mc503Alhw',
'$mc503Ango',
'$mc503Ax',
'$mc503Bfcv',
'$mc503Blhs',
'$mc503Blhw',
'$mc503Bngo',
'$mc503Bx',
'$mc503Cfcv',
'$mc503Clhs',
'$mc503Clhw',
'$mc503Cngo',
'$mc503Cx',
'$mc503Dfcv',
'$mc503Dlhs',
'$mc503Dlhw',
'$mc503Dngo',
'$mc503Dx',
'$mc503Efcv',
'$mc503Elhs',
'$mc503Elhw',
'$mc503Engo',
'$mc503Ex',
'$mc503Ffcv',
'$mc503Flhs',
'$mc503Flhw',
'$mc503Fngo',
'$mc503Fx',
'$mc503Gfcv',
'$mc503Glhs',
'$mc503Glhw',
'$mc503Gngo',
'$mc503Gx',
'$mc503GXx',
'$mc503Xfcv',
'$mc503Xlhs',
'$mc503Xlhw',
'$mc503Xngo',
'$mc503Xx',
'$mc504F',
'$mc504Fx',
'$mc504R',
'$mc504Rx',
'$mc504W',
'$mc504Wx',
'$mc505',
'$mc506',
'$mc507',
'$mc508',
'$mc508_88',
'$mc509',
'$mc509_88',
'$mc510',
'$mc510_88',
'$mc511',
'$mc512_1',
'$mc512_2',
'$mc512_3',
'$mc512_4',
'$mc512_5',
'$mc512_6',
'$mc512_7',
'$mc512_88',
'$mc512_99',
'$mc512x',
'$mc513',
'$mc513x',
'$mc514',
'$mc515',
'$mc516',
'$mc517',
'$mc518',
'$mc519',
'$mc520',
'$mc521',
'$mc522_1',
'$mc522_2',
'$mc522_3',
'$mc522_4',
'$mc522_5',
'$mc522_6',
'$mc522_7',
'$mc522_8',
'$mc522_88',
'$mc522_9',
'$mc523',
'$mc524_99',
'$mc524acr',
'$mc524can',
'$mc525_1',
'$mc525_10',
'$mc525_11',
'$mc525_12',
'$mc525_13',
'$mc525_14',
'$mc525_15',
'$mc525_16',
'$mc525_17',
'$mc525_18',
'$mc525_19',
'$mc525_2',
'$mc525_20',
'$mc525_3',
'$mc525_4',
'$mc525_5',
'$mc525_6',
'$mc525_7',
'$mc525_7x',
'$mc525_8',
'$mc525_9',
'$mc601',
'$mc602',
'$mc603_1',
'$mc603_2',
'$mc603_3',
'$mc603_4',
'$mc603_5',
'$mc603x1',
'$mc604_1',
'$mc604_10',
'$mc604_11',
'$mc604_12',
'$mc604_2',
'$mc604_3',
'$mc604_4',
'$mc604_5',
'$mc604_6',
'$mc604_7',
'$mc604_8',
'$mc604_88',
'$mc604_9',
'$mc604x',
'$mc605_1',
'$mc605_2',
'$mc605_3',
'$mc605_4',
'$mc605_5',
'$mc605x',
'$mc606',
'$mc607_1',
'$mc607_2',
'$mc607_3',
'$mc607_4',
'$mc607_5',
'$mc607_6',
'$mc607_7',
'$mc607_88',
'$mc607a',
'$mc607b',
'$mc607bx',
'$mc607x',
'$mc608_m1',
'$mc608_m2',
'$mc608_m3',
'$mc608_m4',
'$mc608_m5',
'$mc609',
'$mc610',
'$mcRem6',
'$mcEndDateTime',
'$mcFrmno',
'$UID',
'$mcGPSAcc',
'$mcGPSLat',
'$mcGPSLng',
'$mcGPSTime',
'$mcRem2',
'$mcRem4',
'$mcRem5',
'$PN',
'$ST'
)";


// SQL FIELDS for Section 6

/* mc601,mc602,mc6031,mc6032,mc6033,mc6034,mc6035,mc603x1,mc6041,mc6042,mc6043,mc6044,mc6045,mc6046,mc6047,mc6048,mc6049,mc60410,mc60411,mc60412,mc60412x,mc6051,
mc6052,mc6053,mc6054,mc6055,mc6055x,mc606,mc6071,mc6072,mc6073,mc6074,mc6075,mc6076,mc6077,mc6078,mc607a,mc607b,mc607bx,mc608m1,mc608m2,mc608m3,mc608m4,mc608m5,
mc609,mc610, */

// SQL VALUES for Section 6

/* '$mc601','$mc602','$mc6031','$mc6032','$mc6033','$mc6034','$mc6035','$mc603x1',
'$mc6041','$mc6042','$mc6043','$mc6044','$mc6045','$mc6046','$mc6047','$mc6048','$mc6049','$mc60410','$mc60411','$mc60412','$mc60412x','$mc6051','$mc6052',
'$mc6053','$mc6054','$mc6055','$mc6055x','$mc606','$mc6071','$mc6072','$mc6073','$mc6074','$mc6075','$mc6076','$mc6077','$mc6078','$mc607a','$mc607b','$mc607bx',
'$mc608m1','$mc608m2','$mc608m3','$mc608m4','$mc608m5','$mc609','$mc610', */

	//echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));
$rCount= $rCount+1;
}
	//echo "Succcess!";
	} 
mysqli_close($con);
$encoded = $jCount. " Received - ".$rCount." inserted Succcessfully";
//} else{
	//$encoded = file_get_contents("php://input");
//}
//}

header('Content-type: application/json');
exit($encoded);

header('Content-Type: application/json');
echo json_encode($data);
}
