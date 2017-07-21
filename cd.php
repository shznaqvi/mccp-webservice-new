<?php
ini_set('memory_limit', '-1');
$a=file_get_contents("forms.json");


$arr=array("\\",   '"S2":"{', '"S4":"{','"S5":"{','"S6":"{','"im":"{','"cf":"{','"sfDate":"{');

$stra=str_replace($arr,'',$a);
$stra=str_replace('"}"', '"', $stra);

echo $stra;


echo file_put_contents("forms_cleaned.json",$stra);

?>