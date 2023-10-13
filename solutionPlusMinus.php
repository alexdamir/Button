<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);

$positive = 0;
$negative = 0;
$zeroes = 0;

for ($i=0; $i < count($arr) ; $i++) { 
	if ( $arr[$i] > 0 ) {
		$positive++;
	} elseif ( $arr[$i] < 0 ) {
		$negative++;
	} else {
		$zeroes++;
	}
}

printf("%.6f\n%.6f\n%.6f\n", $positive/$n, $negative/$n, $zeroes/$n );



?>