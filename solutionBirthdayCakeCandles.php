<?php

$handle = fopen ("php://stdin", "r");
function birthdayCakeCandles($n, $ar) {
	$Max = 0;
	$Count = 0;
	for ($i=0; $i < $n ; $i++) { 
		if ( $Max == $ar[$i] ) {
			$Count++;
		} elseif ( $Max < $ar[$i] ) {
			$Max = $ar[$i];
			$Count = 1;
		}
	}
	return $Count;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = birthdayCakeCandles($n, $ar);
echo $result . "\n";

?>
