<?php

$handle = fopen ("php://stdin", "r");
function timeConversion($s) {
	sscanf($s, "%2d:%2d:%2d%2s", $hour, $min, $sec, $am);
	if ( $hour == 12 && $am == "AM" ) {
		$hour = 0;
	} elseif ( $am == "PM") {
		if ($hour < 12) {
			$hour += 12;
		}
	}
	return sprintf("%02d:%02d:%02d", $hour, $min, $sec); 
}

fscanf($handle, "%s",$s);
$result = timeConversion($s);
echo $result . "\n";

?>
