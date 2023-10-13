<?php

$handle = fopen ("php://stdin", "r");
function factorial($n) {
if ($n <=1) {
	$res = 1;
} else {
	$res = $n * factorial($n-1);
}
return $res;
}

//fscanf($handle, "%i",$n);
$n = 3;
$result = factorial($n);
echo $result . "\n";

?>
