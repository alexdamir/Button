<?php

$handle = fopen ("php://stdin", "r");
function solve($year){
	$feb = 28;
	if ( $year >= 1700  AND   $year <= 1917) {
		if ( ($year % 4) == 0 )	{
			$feb = 29;	
		}
	} elseif ( $year == 1918 ) {
		$feb = 15;
	} else {
		if ( (($year % 400) == 0) OR ((($year % 4) == 0) AND (($year % 100) != 0))  )	{
			$feb = 29;	
		}
	}
	
	$day = 256 - ( 31 + $feb +31 + 30 +31 +30 +31 + 31);
	$res = sprintf("%02d.09.%4d", $day, $year);
	return $res;
}

fscanf($handle, "%d",$year);
$result = solve($year);
echo $result . "\n";

?>
