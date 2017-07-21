<?php 
$handle = fopen("forms.json", "r");
$stra = "";
if ($handle) {
	echo "Starting modification \r\n";
    while (($line = fgets($handle)) !== false) {
       $arr=array("\\",   '"S2":"{', '"S4":"{','"S5":"{','"S6":"{','"im":"{','"cf":"{','"sfDate":"{');
echo "INPUT: "+$line+"\r\n";
$line=str_replace($arr,'',$line);
$line=str_replace('"}"', '"', $line);
$stra .= $line;
$stra .= "\r\n";
echo "OUTPUT: " + $line+"\r\n";
    }
echo "Done modification \r\n";
    fclose($handle);
	file_put_contents("forms_cleaned.json",$stra);
} else {
    // error opening the file.
} 

?>