<?php

$handle = fopen ("php://stdin", "r");

function getTotalX($a, $b) {
	$Count = 0;

	for ($X=1; $X <= 100 ; $X++) { 
		$found = true;
		for ($i=0; $i < count($a) ; $i++) { 
			if ( $X % $a[$i] ) {
				$found = false;
				break;
			}
		}
		if ($found) {
			for ($j=0; $j < count($b) ; $j++) { 
				if ( $b[$j] % $X ) {
					$found = false;
					break;
				}
			}
			if ($found) {
				$Count++;
			}
		}	
	}

	return $Count;
}

fscanf($handle, "%i %i", $n, $m);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
$b_temp = fgets($handle);
$b = explode(" ",$b_temp);
$b = array_map('intval', $b);
$total = getTotalX($a, $b);
echo $total . "\n";

?>
