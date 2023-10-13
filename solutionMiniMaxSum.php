<?php

$handle = fopen ("php://stdin", "r");
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);

$Min = -1;
$Max = -1;

for ($i=0; $i < count($arr) ; $i++) { 
	$Sum = 0;
	for ($j=0; $j < count($arr) ; $j++) { 
		if ( $j != $i) {
			$Sum += $arr[$j];
		}
	}
	if ( ($Min == -1) || ($Min > $Sum) ) {
		$Min = $Sum;
	}
	if ( ($Max == -1) || ($Max < $Sum) ) {
		$Max = $Sum;
	}
}

printf("%d %d\n", $Min, $Max);

?>
