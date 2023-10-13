<?php

$handle = fopen ("php://stdin", "r");
function sockMerchant($n, $ar) {
	$socks = array();
	for ($i=0; $i < $n ; $i++) {
		if ( ! isset( $socks[ $ar[$i] ] )) {
		 	$socks[ $ar[$i] ] = 1;
		} else {
			$socks[ $ar[$i] ]++;
		}
	}
	$res = 0;
	foreach ($socks as $key => $value) {
		$res += intdiv( $value, 2);
	}
	return $res;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = sockMerchant($n, $ar);
echo $result . "\n";

?>
