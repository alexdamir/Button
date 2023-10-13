<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);
$res = array();
for($a0 = 0; $a0 < $N; $a0++){
    fscanf($handle,"%s %s",$firstName,$emailID);
    if (preg_match("/.+@gmail\.com/i",$emailID)) {
    	$res[] = $firstName;
    }
}
sort($res);	
foreach ($res as $key => $value) {
	echo "$value\n";
}
?>
