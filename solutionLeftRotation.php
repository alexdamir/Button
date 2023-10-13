<?php

$handle = fopen ("php://stdin", "r");
function leftRotation($a, $d) {
	$res = array();
	$n = count($a);
	$rot = $d % $n;
	for ($i=0; $i < $n; $i++) {
		$j = $i+$rot;
		if ($j>=$n ) {
			$j -= $n;
		}
		$res[] = $a[$j]; 
	} 
	return $res;
}

fscanf($handle, "%i %i", $n, $d);
$a_temp = trim(fgets($handle));
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
$result = leftRotation($a, $d);
echo implode(" ", $result)."\n";



?>
