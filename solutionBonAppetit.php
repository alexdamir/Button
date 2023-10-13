<?php

$handle = fopen ("php://stdin", "r");
function bonAppetit($n, $k, $b, $ar) {

	$sum = 0;
	for ($i=0; $i < $n; $i++) { 
		if ( $i != $k) {
			$sum += $ar[$i];
		}
	}
	$b_acrual = $sum /2 ;
	if ( $b_acrual < $b ) {
		$res = $b - $b_acrual;
	} else {
		$res = "Bon Appetit";	
	}
	return $res;
}

fscanf($handle, "%i %i", $n, $k);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
fscanf($handle, "%i",$b);
$result = bonAppetit($n, $k, $b, $ar);
echo $result . "\n";

?>
