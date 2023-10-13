<?php

$handle = fopen ("php://stdin", "r");
function divisibleSumPairs($n, $k, $ar) {
	$Count = 0;

	for ($i=0; $i < $n ; $i++) {
		
		for ($j=$i+1; $j < $n  ; $j++) { 
			if ( (($ar[$i]+$ar[$j]) % $k) == 0 ) {
				$Count++;
			}
		}
	}
	return $Count;
}

fscanf($handle, "%i %i", $n, $k);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = divisibleSumPairs($n, $k, $ar);
echo $result . "\n";

?>
