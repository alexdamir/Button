<?php

$handle = fopen ("php://stdin", "r");

function solve($n, $s, $d, $m){

	$Count = 0;

	for ($i=0; $i < $n ; $i++) {
		$Sum = 0; $cc = 0;
		for ($j=$i; $j < $i+$m AND $j < $n  ; $j++) { 
			$Sum += $s[$j];
			$cc++;
		}
		if ($Sum == $d AND $cc == $m ) {
			$Count++;
		}
	}
	return $Count;
}

fscanf($handle, "%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
fscanf($handle, "%d %d", $d, $m);
$result = solve($n, $s, $d, $m);
echo $result . "\n";

?>
