<?php

$handle = fopen ("php://stdin", "r");
function aVeryBigSum($n, $ar) {
	$sum = 0;
	for ($i=0; $i < count($ar) && $i <$n; $i++) { 
		$sum += $ar[$i];
	}
	return $sum;

}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = aVeryBigSum($n, $ar);
echo $result . "\n";

?>
